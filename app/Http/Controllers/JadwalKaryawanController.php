<?php

namespace App\Http\Controllers;

use App\Models\JadwalKaryawan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class JadwalKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jadwalKaryawan = JadwalKaryawan::with('karyawan.barber')->get();
        return view('Admin.JadwalKaryawan.index', compact('jadwalKaryawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $karyawans = Karyawan::all();
        return view('Admin.JadwalKaryawan.tambah', compact('karyawans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'karyawan_id' => 'required|array',
            'karyawan_id.*' => 'exists:karyawans,id',
            'waktu_mulai' => 'required|array',
            'waktu_selesai' => 'required|array',
            // You might need additional validation rules based on your requirements
        ]);

        foreach ($request->karyawan_id as $key => $karyawanId) {
            JadwalKaryawan::create([
                'tanggal' => $request->tanggal,
                'karyawan_id' => $karyawanId,
                'waktu_mulai' => $request->waktu_mulai[$key],
                'waktu_selesai' => $request->waktu_selesai[$key],
            ]);
        }

        return redirect()->route('jadwalkaryawan.index')->with('success', 'Jadwal karyawan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalKaryawan $jadwalKaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwalKaryawan = JadwalKaryawan::findOrFail($id);
        $karyawans = Karyawan::all();
        return view('Admin.JadwalKaryawan.edit', compact('jadwalKaryawan', 'karyawans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'karyawan_id' => 'required|exists:karyawans,id',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_selesai' => 'required|date_format:H:i',
        ]);

        $jadwalKaryawan = JadwalKaryawan::findOrFail($id);
        $jadwalKaryawan->update([
            'tanggal' => $request->tanggal,
            'karyawan_id' => $request->karyawan_id,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
        ]);

        return redirect()->route('jadwalkaryawan.index')->with('success', 'Jadwal karyawan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // Ambil id jadwal yang akan dihapus dari permintaan
        $jadwalKaryawanid = $request->input('id');

        // Cari jadwal karyawan berdasarkan id
        $jadwalKaryawan = JadwalKaryawan::findOrFail($jadwalKaryawanid);

        // Hapus karyawan
        $jadwalKaryawan->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
