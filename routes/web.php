<?php

use App\Http\Controllers\BarberController;
use App\Http\Controllers\BookingAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataCustomerController;
use App\Http\Controllers\JadwalKaryawanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KonfirmasiBookingController;
use App\Http\Controllers\layananBarberController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LayananKaryawanController;
use App\Http\Controllers\PilihBarberController;
use App\Http\Controllers\PilihHairArtistController;
use App\Http\Controllers\PilihJadwalController;
use App\Http\Controllers\PilihLayananController;
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
})->name('index');

Route::get('/bookingjadwal', function () {
    return view('bookingJadwal');
})->name('bookingjadwal');

Route::get('/bookingkonfirmasi', function () {
    return view('bookingKonfirmasi');
})->name('bookingkonfirmasi');

Route::middleware(['auth', 'verified', 'role:customer|admin'])->group(function () {
    Route::get('/bookingbarber', [PilihBarberController::class, 'index'])->name('bookingbarber');

    Route::get('/bookingbarber/{barber_id}', [PilihLayananController::class, 'index'])->name('pilihlayanan');

    Route::get('/bookingbarber/{barber_id}/{layanan_id}', [PilihHairArtistController::class, 'index'])->name('bookingartist');

    Route::get('/bookingjadwal/{barber_id}/{layanan_id}/{karyawan_id}', [PilihJadwalController::class, 'index'])->name('bookingjadwal');

    Route::get('/konfirmasi/{barber_id}/{layanan_id}/{karyawan_id}/{tanggal}/{waktu}', [KonfirmasiBookingController::class, 'index'])->name('konfirmasiBooking');
    Route::post('/konfirmasi/store', [KonfirmasiBookingController::class, 'store'])->name('konfirmasiBooking.store');


    Route::get('/bookingartist-detail', function () {
        return view('bookingArtistDetail');
    })->name('bookingartist-detail');
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dashboardadmin', [DashboardController::class, 'index'])->name('dashboardadmin');

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

    Route::get('/servicehair', [LayananBarberController::class, 'index'])->name('layananbarber.index');
    Route::delete('/servicehair', [LayananBarberController::class, 'destroy'])->name('layananbarber.destroy');
    Route::get('/servicehair/tambah', [LayananBarberController::class, 'create'])->name('layananbarber.create');
    Route::post('/servicehair/tambah', [LayananBarberController::class, 'store'])->name('layananbarber.store');
    Route::get('/servicehair/{layanan}/edit', [LayananBarberController::class, 'edit'])->name('layananbarber.edit');
    Route::put('/servicehair/{layanan}', [LayananBarberController::class, 'update'])->name('layananbarber.update');

    Route::get('/hairartist', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::delete('/hairartist', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
    Route::get('/hairartist/tambah', [KaryawanController::class, 'create'])->name('karyawan.create');
    Route::post('/hairartist/tambah', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::get('/hairartist/{karyawan}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    Route::put('/hairartist/{karyawan}', [KaryawanController::class, 'update'])->name('karyawan.update');

    Route::get('/employeeservices', [LayananKaryawanController::class, 'index'])->name('layanankaryawan.index');
    Route::delete('/employeeservices', [LayananKaryawanController::class, 'destroy'])->name('layanankaryawan.destroy');
    Route::get('/employeeservices/tambah', [LayananKaryawanController::class, 'create'])->name('layanankaryawan.create');
    Route::post('/employeeservices/tambah', [LayananKaryawanController::class, 'store'])->name('layanankaryawan.store');
    Route::get('/employeeservices/{layanankaryawan}/edit', [LayananKaryawanController::class, 'edit'])->name('layanankaryawan.edit');
    Route::put('/employeeservices/{layanankaryawan}', [LayananKaryawanController::class, 'update'])->name('layanankaryawan.update');

    Route::get('/jadwal', [JadwalKaryawanController::class, 'index'])->name('jadwalkaryawan.index');
    Route::delete('/jadwal', [JadwalKaryawanController::class, 'destroy'])->name('jadwalkaryawan.destroy');
    Route::get('/jadwal/tambah', [JadwalKaryawanController::class, 'create'])->name('jadwalkaryawan.create');
    Route::post('/jadwal/tambah', [JadwalKaryawanController::class, 'store'])->name('jadwalkaryawan.store');
    Route::get('/jadwal/{jadwalKaryawan}/edit', [JadwalKaryawanController::class, 'edit'])->name('jadwalkaryawan.edit');
    Route::put('/jadwal/{jadwalKaryawan}', [JadwalKaryawanController::class, 'update'])->name('jadwalkaryawan.update');

    Route::get('/customer', [DataCustomerController::class, 'index'])->name('customer.index');
    Route::delete('/customer', [DataCustomerController::class, 'destroy'])->name('customer.destroy');

    Route::get('/booking', [BookingAdminController::class, 'index'])->name('databooking.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
