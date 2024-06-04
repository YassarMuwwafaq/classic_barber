<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Booking;
use App\Models\JadwalKaryawan;
use App\Models\Karyawan;
use App\Models\Layanan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PilihJadwalController extends Controller
{
    //
    public function index($barber_id, $layanan_id, $karyawan_id, Request $request)
{
    // Ambil barber, layanan, dan karyawan berdasarkan ID
    $barber = Barber::findOrFail($barber_id);
    $layanan = Layanan::findOrFail($layanan_id);
    $karyawan = Karyawan::findOrFail($karyawan_id);

    // Ambil bulan dan tahun dari request atau gunakan bulan dan tahun sekarang
    $currentMonth = $request->input('month', date('m'));
    $currentYear = $request->input('year', date('Y'));

    // Ambil jadwal untuk bulan dan tahun tertentu
    $jadwals = JadwalKaryawan::where('karyawan_id', $karyawan_id)
        ->whereYear('tanggal', $currentYear)
        ->whereMonth('tanggal', $currentMonth)
        ->get();

    // Buat objek Carbon untuk navigasi
    $currentDate = Carbon::createFromDate($currentYear, $currentMonth, 1);
    $previousDate = (clone $currentDate)->subMonth();
    $nextDate = (clone $currentDate)->addMonth();

    // Ambil jadwal booking yang sudah ada untuk bulan dan tahun tertentu
    $jadwalBookings = Booking::whereYear('tanggal', $currentYear)
        ->whereMonth('tanggal', $currentMonth)
        ->pluck('waktu')
        ->toArray();

    // Buat array untuk menyimpan waktu yang sudah dibooking
    $jadwalBooked = [];

    // Tambahkan waktu yang sudah dibooking ke dalam array
    foreach ($jadwalBookings as $jadwalBooking) {
        $jadwalBooked[] = Carbon::parse($jadwalBooking)->format('H:i');
    }

    return view('bookingJadwal', compact('barber', 'layanan', 'karyawan', 'jadwals', 'currentDate', 'previousDate', 'nextDate', 'jadwalBooked'));
}

}
