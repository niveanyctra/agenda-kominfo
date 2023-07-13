<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DispensasiController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JamPelajaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\JurusanController;
use App\Models\Dispensasi;
use App\Models\Event;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelas;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $event = Event::count();
        return view('pages.dashboard', compact('event'));
    })->name('dashboard');
});

Route::resource('events', EventController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

Route::get('events/edit', [EventController::class, 'listEvent'])->name('events.list');
Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('filter/{txtTglAwal}/{txtTglAkhir}', [LaporanController::class, 'filter'])->name('filter');


