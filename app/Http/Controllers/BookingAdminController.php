<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingAdminController extends Controller
{
    //
    public function index()
    {
        $bookings = Booking::latest()->get();
        return view('admin.booking.index', ['bookings'=> $bookings]);
    }
}
