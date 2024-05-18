<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use Illuminate\Http\Request;

class PilihBarberController extends Controller
{
    //
    public function index()
    {
        $barbers = Barber::all();
        return view('bookingbarber', compact('barbers'));
    }
}
