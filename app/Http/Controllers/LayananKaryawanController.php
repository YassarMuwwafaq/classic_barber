<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Layanan;
use App\Models\LayananKaryawan;
use Illuminate\Http\Request;

class LayananKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Ambil semua data karyawan beserta layanan mereka, dan filter hanya yang memiliki layanan
        $karyawans = Karyawan::with('Layanans')->get()->filter(function ($karyawan) {
            return $karyawan->Layanans->isNotEmpty();
        });

        return view('Admin.LayananKaryawan.index', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // Ambil semua data dari tabel Karyawan
        $karyawans = Karyawan::all();

        // Ambil semua data dari tabel Layanan
        $layanans = Layanan::all();
        return view('Admin.LayananKaryawan.tambah', ['karyawans' => $karyawans, 'layanans' => $layanans]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'layanan_id' => 'required|array',
            'layanan_id.*' => 'exists:layanans,id',
            'harga' => 'required|array',
            'harga.*' => 'numeric',
        ]);

        // Ambil karyawan_id dari input
        $karyawanId = $request->input('karyawan_id');

        // Ambil data layanan_id dan harga dari input
        $layananIds = $request->input('layanan_id');
        $hargas = $request->input('harga');

        // Loop melalui array layanan_id dan harga untuk menyimpan setiap entri
        foreach ($layananIds as $key => $layananId) {
            LayananKaryawan::create([
                'karyawan_id' => $karyawanId,
                'layanan_id' => $layananId,
                'harga' => $hargas[$key],
            ]);
        }

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('layanankaryawan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(LayananKaryawan $layananKaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($layanankaryawan)
    {
        // Ambil data karyawan yang akan diedit
    $karyawan = Karyawan::findOrFail($layanankaryawan);

    // Ambil semua layanan yang tersedia
    $layanans = Layanan::all();

    // Return view dengan data yang diperlukan
    return view('Admin.LayananKaryawan.edit', compact('karyawan', 'layanans'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $layanankaryawan)
    {
        // Validasi input
        $request->validate([
            'layanan_id' => 'required|array',
            'layanan_id.*' => 'exists:layanans,id',
            'harga' => 'required|array',
            'harga.*' => 'numeric',
        ]);
    
        // Ambil data karyawan yang akan diupdate
        $karyawan = Karyawan::findOrFail($layanankaryawan);
    
        // Detach semua layanan sebelumnya
        $karyawan->Layanans()->detach();
    
        // Ambil data layanan_id dan harga dari input
        $layananIds = $request->input('layanan_id');
        $hargas = $request->input('harga');
    
        // Loop melalui array layanan_id dan harga untuk menyimpan setiap entri
        foreach ($layananIds as $key => $layananId) {
            $karyawan->Layanans()->attach($layananId, ['harga' => $hargas[$key]]);
        }
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('layanankaryawan.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // Ambil barber_id dari permintaan
        $karyawanId = $request->input('karyawan_id');

        // Hapus semua entri dengan barber_id yang diberikan
        LayananKaryawan::where('karyawan_id', $karyawanId)->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
