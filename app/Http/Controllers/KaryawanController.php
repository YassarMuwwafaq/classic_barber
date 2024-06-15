<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Karyawan;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $karyawan = Karyawan::latest()->get();

        return view('Admin.karyawan.index', ['karyawan' => $karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua data dari tabel Barber
        $barbers = Barber::all();
        
        return view('Admin.karyawan.tambah', ['barbers' => $barbers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'barber_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => ['required', 'regex:/^\d{10,15}$/'], // Telepon harus terdiri dari 10-15 digit
            'email' => ['required', 'email', 'regex:/^.+@.+\..+$/'], // Email harus valid dan memiliki @
            'foto' => 'required|mimes:png,jpg,jpeg,svg',
        ], [
            'barber_id.required' => 'Kolom Barber harus diisi.',
            'nama.required' => 'Kolom Nama harus diisi.',
            'alamat.required' => 'Kolom Alamat harus diisi.',
            'telepon.required' => 'Kolom Telepon harus diisi.',
            'telepon.regex' => 'Kolom Telepon harus berupa angka dan memiliki 10-15 digit.',
            'email.required' => 'Kolom Email harus diisi.',
            'email.email' => 'Format Email tidak valid.',
            'email.regex' => 'Format Email tidak valid.',
            'foto.required' => 'Foto harus diunggah.',
            'foto.mimes' => 'Foto harus dalam format: png, jpg, jpeg, atau svg.',
        ]);

        $foto = $request->file('foto');
        $filename = date('Y-m-d') . str_replace(' ', '_', $foto->getClientOriginalName());
        $path = 'foto-karyawan/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($foto));

        Karyawan::create([
            'barber_id' => $request->barber_id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'foto' => $path,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        //
        $barbers = Barber::all();
        return view('Admin.karyawan.edit', compact('karyawan', 'barbers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
        $request->validate([
            'barber_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => ['required', 'regex:/^\d{10,15}$/'], // Telepon harus terdiri dari 10-15 digit
            'email' => ['required', 'email', 'regex:/^.+@.+\..+$/'], // Email harus valid dan memiliki @
            'foto' => 'required|mimes:png,jpg,jpeg,svg',
        ], [
            'barber_id.required' => 'Kolom Barber harus diisi.',
            'nama.required' => 'Kolom Nama harus diisi.',
            'alamat.required' => 'Kolom Alamat harus diisi.',
            'telepon.required' => 'Kolom Telepon harus diisi.',
            'telepon.regex' => 'Kolom Telepon harus berupa angka dan memiliki 10-15 digit.',
            'email.required' => 'Kolom Email harus diisi.',
            'email.email' => 'Format Email tidak valid.',
            'email.regex' => 'Format Email tidak valid.',
            'foto.required' => 'Foto harus diunggah.',
            'foto.mimes' => 'Foto harus dalam format: png, jpg, jpeg, atau svg.',
        ]);
        // Update barber_id dan nama
        $karyawan->update([
            'barber_id'=>$request->barber_id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);
    
        // Update foto jika ada
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = date('Y-m-d') . str_replace(' ', '_', $foto->getClientOriginalName());
            $path = 'foto-karyawan/' . $filename;
    
            // Hapus foto lama jika ada
            if (Storage::disk('public')->exists($karyawan->foto)) {
                Storage::disk('public')->delete($karyawan->foto);
            }
    
            Storage::disk('public')->put($path, file_get_contents($foto));
            $karyawan->update(['foto' => $path]);
        }
    
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // Ambil id karyawan yang akan dihapus dari permintaan
        $karyawanid = $request->input('id');

        // Cari karyawan berdasarkan id
        $karyawan = Karyawan::findOrFail($karyawanid);

        // Hapus foto dari penyimpanan jika ada
        if (Storage::disk('public')->exists($karyawan->foto)) {
            Storage::disk('public')->delete($karyawan->foto);
        }

        // Hapus karyawan
        $karyawan->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
