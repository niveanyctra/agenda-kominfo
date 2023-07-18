<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $januari = $count = DB::table('events')
                ->whereMonth('start_date', 1)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $februari = $count = DB::table('events')
                ->whereMonth('start_date', 2)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $maret = $count = DB::table('events')
                ->whereMonth('start_date', 3)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $april = $count = DB::table('events')
                ->whereMonth('start_date', 4)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $mei = $count = DB::table('events')
                ->whereMonth('start_date', 5)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $juni = $count = DB::table('events')
                ->whereMonth('start_date', 6)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $juli = $count = DB::table('events')
                ->whereMonth('start_date', 7)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $agustus = $count = DB::table('events')
                ->whereMonth('start_date', 8)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $september = $count = DB::table('events')
                ->whereMonth('start_date', 9)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $oktober = $count = DB::table('events')
                ->whereMonth('start_date', 10)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $november = $count = DB::table('events')
                ->whereMonth('start_date', 11)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        $desember = $count = DB::table('events')
                ->whereMonth('start_date', 12)
                ->whereYear('start_date', date('Y'))
                ->count('id');
        return view('pages.dashboard', compact('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember'));
    })->name('dashboard');
});

Route::resource('events', EventController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);
Route::resource('user', UserController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

Route::get('events/edit', [EventController::class, 'listEvent'])->name('events.list');
Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('laporan/filter/{txtTglAwal}/{txtTglAkhir}', [LaporanController::class, 'filter'])->name('filter');


