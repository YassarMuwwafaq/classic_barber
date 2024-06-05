<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Booking;
use App\Models\Karyawan;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;

class KonfirmasiBookingController extends Controller
{
    //
    public function index($barber_id, $layanan_id, $karyawan_id, $tanggal, $waktu)
    {
        // Ambil data barber, layanan, karyawan, dan jadwal berdasarkan ID
        $barber = Barber::findOrFail($barber_id);
        $layanan = Layanan::findOrFail($layanan_id);
        $karyawan = Karyawan::findOrFail($karyawan_id);

        // Ambil harga dari tabel pivot
        $harga = $karyawan->Layanans()->where('layanan_id', $layanan_id)->first()->pivot->harga;

        // Ambil tanggal dan waktu
        $jadwal = new \stdClass();
        $jadwal->tanggal = $tanggal;
        $jadwal->waktu = $waktu;

        // Set Midtrans configuration
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$clientKey = config('midtrans.client_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = config('midtrans.is_sanitized');
        \Midtrans\Config::$is3ds = config('midtrans.is_3ds');

        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $harga,
            ],
            'customer_details' => [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('bookingKonfirmasi', compact('barber', 'layanan', 'karyawan', 'jadwal', 'harga', 'snapToken'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'barber_id' => 'required',
            'layanan_id' => 'required',
            'karyawan_id' => 'required',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'no_hp' => 'required|numeric',
            'customer_name' => 'required'
        ]);

        // Simpan data booking
        Booking::create([
            'user_id' => Auth::id(),
            'nama' => $request->customer_name,
            'telepon' => $request->no_hp,
            'barber' => Barber::find($request->barber_id)->nama,
            'layanan' => Layanan::find($request->layanan_id)->nama,
            'hair_artist' => Karyawan::find($request->karyawan_id)->nama,
            'harga' => $request->harga,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);
        return redirect()->route('index')->with('success', 'Booking berhasil disimpan.');
    }
}
