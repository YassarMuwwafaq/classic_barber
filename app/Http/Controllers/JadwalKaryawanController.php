<?php

namespace App\Http\Controllers;

use App\Models\JadwalKaryawan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class JadwalKaryawanController extends Controller
{
    /**
     * Mendapatkan rentang waktu berdasarkan sesi yang dipilih.
     */
    protected function getTimeRange($waktu)
    {
        // Definisikan rentang waktu untuk setiap sesi
        $timeRanges = [
            '08.00-09.59' => ['start' => '08:00:00', 'end' => '09:59:00'],
            '10.00-11.59' => ['start' => '10:00:00', 'end' => '11:59:00'],
            '12.00-13.59' => ['start' => '12:00:00', 'end' => '13:59:00'],
            '14.00-15.59' => ['start' => '14:00:00', 'end' => '15:59:00'],
            '16.00-07.59' => ['start' => '16:00:00', 'end' => '17:59:00'],
            '18.00-19.59' => ['start' => '18:00:00', 'end' => '19:59:00'],
            // Tambahkan rentang waktu sesuai kebutuhan
        ];

        // Ambil rentang waktu sesuai dengan sesi yang dipilih
        return $timeRanges[$waktu];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jadwalKaryawan = JadwalKaryawan::latest()->get();

        return view('admin.jadwalkaryawan.index', ['jadwalKaryawan' => $jadwalKaryawan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $karyawans = Karyawan::all();

        // Definisikan rentang waktu sesuai dengan kebutuhan
        $waktus = [
            '08.00-09.59', '10.00-11.59', '12.00-13.59', '14.00-15.59', '16.00-17.59', '18.00-19.59'
        ];

        return view('admin.jadwalkaryawan.tambah', compact('karyawans', 'waktus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'karyawan_id' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required', // Tetap menggunakan 'waktu' sebagai nama input
        ], [
            'karyawan_id.required' => 'Kolom karyawan harus diisi.',
            'tanggal.required' => 'Kolom Tanggal harus diisi.',
            'waktu.required' => 'Kolom Waktu harus diisi',
        ]);

        $waktu = $request->waktu; // Menggunakan 'waktu' sebagai input
        $timeRange = $this->getTimeRange($waktu);

        JadwalKaryawan::create([
            'karyawan_id' => $request->karyawan_id,
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $timeRange['start'],
            'waktu_berakhir' => $timeRange['end'],
            'tersedia' => $request->input('tersedia', false) // Gunakan nilai default false jika checkbox tidak dicentang
        ]);

        return redirect()->route('jadwalkaryawan.index')->with('success', 'Data berhasil ditambahkan.');
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
    public function edit(JadwalKaryawan $jadwalKaryawan)
    {
        //
        $karyawans = Karyawan::all();

        // Definisikan rentang waktu sesuai dengan kebutuhan
        $waktus = [
            '08.00-09.59', '10.00-11.59', '12.00-13.59', '14.00-15.59', '16.00-07.59', '18.00-19.59'
        ];

        return view('admin.jadwalkaryawan.edit', compact('jadwalKaryawan', 'karyawans', 'waktus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalKaryawan $jadwalKaryawan)
    {
        //
        $request->validate([
            'karyawan_id' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
        ], [
            'karyawan_id.required' => 'Kolom karyawan harus diisi.',
            'tanggal.required' => 'Kolom Tanggal harus diisi.',
            'waktu.required' => 'Kolom Waktu harus diisi',
        ]);

        $waktu = $request->waktu;
        $timeRange = $this->getTimeRange($waktu);

        // Update barber_id dan nama
        $jadwalKaryawan->update([
            'karyawan_id' => $request->karyawan_id,
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $timeRange['start'], // Simpan waktu mulai sesi
            'waktu_berakhir' => $timeRange['end'], // Simpan waktu selesai sesi
            'tersedia' => $request->has('tersedia')
        ]);

        return redirect()->route('jadwalkaryawan.index')->with('success', 'Data berhasil diperbarui.');
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
