<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Karyawan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $barberCount = Barber::count();
        $layananCount = Layanan::count();
        $karyawanCount = Karyawan::count();

        return view('admin.dashboard', compact('barberCount', 'layananCount', 'karyawanCount'));
    }
}
