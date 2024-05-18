<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Ambil semua pengguna dengan peran 'pengguna'
        $layanan = Layanan::latest()->get();

        return view('admin.layanan.index', ['layanan' => $layanan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $barbers = Barber::all();
        return view('admin.layanan.tambah', ['barbers' => $barbers]);
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
            'harga' => 'required',
            'foto' => 'required|mimes:png,jpg,jpeg,svg',
        ], [
            'barber_id.required' => 'Kolom Barber harus diisi.',
            'nama.required' => 'Kolom Nama harus diisi.',
            'harga.required' => 'Kolom Harga harus diisi.',
            'foto' => 'nullable|mimes:png,jpg,jpeg,svg', // Ubah menjadi nullable agar foto tidak wajib diunggah saat pembaruan
        ]);

        $foto = $request->file('foto');
        $filename = date('Y-m-d') . str_replace(' ', '_', $foto->getClientOriginalName());
        $path = 'foto-layanan/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($foto));

        Layanan::create([
            'barber_id' => $request->barber_id,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'foto' => $path,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('layanan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        //
        $barbers = Barber::all();
        return view('admin.layanan.edit', compact('layanan', 'barbers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
        $request->validate([
            'barber_id' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'foto' => 'required|mimes:png,jpg,jpeg,svg',
        ], [
            'barber_id.required' => 'Kolom Barber harus diisi.',
            'nama.required' => 'Kolom Nama harus diisi.',
            'harga.required' => 'Kolom Harga harus diisi.',
            'foto.required' => 'Kolom Foto harus diisi.',
        ]);

        // Update barber_id dan nama
        $layanan->update([
            'barber_id'=>$request->barber_id,
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);
    
        // Update foto jika ada
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = date('Y-m-d') . str_replace(' ', '_', $foto->getClientOriginalName());
            $path = 'foto-layanan/' . $filename;
    
            // Hapus foto lama jika ada
            if (Storage::disk('public')->exists($layanan->foto)) {
                Storage::disk('public')->delete($layanan->foto);
            }
    
            Storage::disk('public')->put($path, file_get_contents($foto));
            $layanan->update(['foto' => $path]);
        }
    
        return redirect()->route('layanan.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // Ambil id layanan yang akan dihapus dari permintaan
        $layananid = $request->input('id');

        // Cari layanan berdasarkan id
        $layanan = Layanan::findOrFail($layananid);

        // Hapus foto dari penyimpanan jika ada
        if (Storage::disk('public')->exists($layanan->foto)) {
            Storage::disk('public')->delete($layanan->foto);
        }

        // Hapus layanan
        $layanan->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
