<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PilihLayananController extends Controller
{
    //
    public function index(Request $request, $barber_id)
    {
        // Ambil barber berdasarkan id
        $barber = Barber::findOrFail($barber_id);

        // Ambil layanan yang terkait dengan barber
        $layanans = $barber->layanans()->get();

        return view('bookingLayanan', compact('barber', 'layanans'));
    }
}
