<?php

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LaporanController;
use Illuminate\Http\Request;

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
        // $year = Carbon::now()->subYear()->format('Y');
        // $year = Carbon::now()->addYear()->format('Y');
        // $year = Carbon::now()->format('Y');
        if(isset($_GET['prev'])) {
            $year = Carbon::now()->subYears(1)->format('Y');
        }
        else if(isset($_GET['prev2'])) {
            $year = Carbon::now()->subYears(2)->format('Y');
        }
         else if(isset($_GET['now'])) {
            $year = Carbon::now()->format('Y');
        }
        //  else if(isset($_GET['next'])) {
        //     $year = Carbon::now()->addYears(1)->format('Y');
        // }
        else{
            $year = Carbon::now()->format('Y');
        }

        $januari = $count = DB::table('events')
                ->whereMonth('start_date', 1)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $februari = $count = DB::table('events')
                ->whereMonth('start_date', 2)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $maret = $count = DB::table('events')
                ->whereMonth('start_date', 3)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $april = $count = DB::table('events')
                ->whereMonth('start_date', 4)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $mei = $count = DB::table('events')
                ->whereMonth('start_date', 5)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $juni = $count = DB::table('events')
                ->whereMonth('start_date', 6)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $juli = $count = DB::table('events')
                ->whereMonth('start_date', 7)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $agustus = $count = DB::table('events')
                ->whereMonth('start_date', 8)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $september = $count = DB::table('events')
                ->whereMonth('start_date', 9)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $oktober = $count = DB::table('events')
                ->whereMonth('start_date', 10)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $november = $count = DB::table('events')
                ->whereMonth('start_date', 11)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        $desember = $count = DB::table('events')
                ->whereMonth('start_date', 12)
                ->whereYear('start_date', Carbon::createFromDate($year))
                ->count('id');
        return view('pages.dashboard', compact('year','januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember'));
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


