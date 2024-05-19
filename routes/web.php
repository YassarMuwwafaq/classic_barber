<?php

use App\Http\Controllers\BarberController;
use App\Http\Controllers\JadwalKaryawanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;

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
Route::get('/tes', function () {
    return view('tesindex');
});

Route::get('/teslogin', function () {
    return view('login');
})->name('teslogin');

Route::get('/tesregister', function () {
    return view('register');
})->name('tesregister');

Route::get('/bookingbarber', function () {
    return view('bookingBarber');
})->name('bookingBarber');

Route::get('/dashboardadmin', function () {
    return view('admin.dashboard');
})->name('dashboard-adminpage');

Route::get('/user', function () {
    return view('admin.user.index');
})->name('user-adminpage');

Route::get('/barber', [BarberController::class, 'index'])->name('barber.index');
Route::delete('/barber', [BarberController::class, 'destroy'])->name('barber.destroy');
Route::get('/barber/tambah', [BarberController::class, 'create'])->name('barber.create');
Route::post('/barber/tambah', [BarberController::class, 'store'])->name('barber.store');
Route::get('/barber/{barber}/edit', [BarberController::class, 'edit'])->name('barber.edit');
Route::put('/barber/{barber}', [BarberController::class, 'update'])->name('barber.update');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::delete('/layanan', [LayananController::class, 'destroy'])->name('layanan.destroy');
Route::get('/layanan/tambah', [LayananController::class, 'create'])->name('layanan.create');
Route::post('/layanan/tambah', [LayananController::class, 'store'])->name('layanan.store');
Route::get('/layanan/{layanan}/edit', [LayananController::class, 'edit'])->name('layanan.edit');
Route::put('/layanan/{layanan}', [LayananController::class, 'update'])->name('layanan.update');

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::delete('/karyawan', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
Route::get('/karyawan/tambah', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan/tambah', [karyawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/{karyawan}/edit', [karyawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/{karyawan}', [karyawanController::class, 'update'])->name('karyawan.update');

Route::get('/jadwal', [JadwalKaryawanController::class, 'index'])->name('jadwalkaryawan.index');
Route::delete('/jadwal', [JadwalKaryawanController::class, 'destroy'])->name('jadwalkaryawan.destroy');
Route::get('/jadwal/tambah', [JadwalKaryawanController::class, 'create'])->name('jadwalkaryawan.create');
Route::post('/jadwal/tambah', [JadwalKaryawanController::class, 'store'])->name('jadwalkaryawan.store');
Route::get('/jadwal/{jadwalKaryawan}/edit', [JadwalKaryawanController::class, 'edit'])->name('jadwalkaryawan.edit');
Route::put('/jadwal/{jadwalKaryawan}', [JadwalKaryawanController::class, 'update'])->name('jadwalkaryawan.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
