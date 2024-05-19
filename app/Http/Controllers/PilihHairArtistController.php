<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Karyawan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PilihHairArtistController extends Controller
{
    //
    public function index($barber_id, $layanan_id)
    {
        // Ambil barber berdasarkan ID
        $barber = Barber::findOrFail($barber_id);

        // Ambil layanan berdasarkan ID
        $layanan = Layanan::findOrFail($layanan_id);

        // Ambil karyawan yang bekerja di barber ini dan menyediakan layanan ini
        $karyawans = Karyawan::whereHas('layanans', function($query) use ($layanan_id) {
            $query->where('layanan_id', $layanan_id);
        })->where('barber_id', $barber_id)->get();

        return view('bookingArtist', compact('barber', 'layanan', 'karyawans'));
    }
    
}
