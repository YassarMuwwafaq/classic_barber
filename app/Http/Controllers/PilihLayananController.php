<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PilihLayananController extends Controller
{
    //
    public function index(Request $request)
    {
        // Ambil barber_id dari request
        $barber_id = $request->query('barber_id');

        // Ambil layanan yang terkait dengan barber tersebut
        $layanans = Layanan::where('barber_id', $barber_id)->get();

        // Kirim data layanans ke view
        return view('bookinglayanan', compact('layanans'));
    }
}
