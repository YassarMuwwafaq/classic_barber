<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Layanan;
use App\Models\LayananBarber;
use Illuminate\Http\Request;

class LayananBarberController extends Controller
{
    //
    public function index()
    {
        $layananbarber = LayananBarber::select(
            'barbers.id AS barber_id',
            'barbers.nama AS nama_barber',
            'layanans.nama AS nama_layanan'
        )
            ->join('barbers', 'layanan_barbers.barber_id', '=', 'barbers.id')
            ->join('layanans', 'layanan_barbers.layanan_id', '=', 'layanans.id')
            ->get();

        // Mengelompokkan data berdasarkan barber_id
        $groupedLayananBarber = $layananbarber->groupBy('barber_id');

        // Membuat array hasil akhir dengan satu barber dan beberapa layanan dalam satu baris
        $result = [];
        foreach ($groupedLayananBarber as $barber_id => $layanans) {
            $result[] = [
                'barber_id' => $barber_id,
                'nama_barber' => $layanans->first()->nama_barber, // Mengambil nama barber dari data pertama dalam kelompok
                'layanans' => $layanans->pluck('nama_layanan')->toArray()
            ];
        }

        return view('Admin.LayananBarber.index', ['barbers' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua data dari tabel Barber
        $barbers = Barber::all();

        // Ambil semua data dari tabel Layanan
        $layanans = Layanan::all();
        return view('Admin.LayananBarber.tambah', ['barbers' => $barbers, 'layanans' => $layanans]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'barber_id' => 'required|exists:barbers,id',
            'layanan_id' => 'required|array',
            'layanan_id.*' => 'exists:layanans,id',
        ]);

        $barberId = $request->input('barber_id');
        $layananIds = $request->input('layanan_id');

        foreach ($layananIds as $layananId) {
            LayananBarber::create([
                'barber_id' => $barberId,
                'layanan_id' => $layananId,
            ]);
        }

        return redirect()->route('layananbarber.index')->with('success', 'Data berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(LayananBarber $layananbarber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($barber_id)
    {
        $barber = Barber::findOrFail($barber_id);
        $layanans = Layanan::all();
        $selectedLayanans = LayananBarber::where('barber_id', $barber_id)->pluck('layanan_id')->toArray();

        return view('Admin.LayananBarber.edit', compact('barber', 'layanans', 'selectedLayanans'));
    }

    public function update(Request $request, $barber_id)
    {
        $request->validate([
            'layanan_id' => 'required|array',
            'layanan_id.*' => 'exists:layanans,id',
        ]);

        LayananBarber::where('barber_id', $barber_id)->delete();

        foreach ($request->input('layanan_id') as $layananId) {
            LayananBarber::create([
                'barber_id' => $barber_id,
                'layanan_id' => $layananId,
            ]);
        }

        return redirect()->route('layananbarber.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request)
    {
        // Ambil barber_id dari permintaan
        $barberId = $request->input('barber_id');

        // Hapus semua entri dengan barber_id yang diberikan
        LayananBarber::where('barber_id', $barberId)->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
