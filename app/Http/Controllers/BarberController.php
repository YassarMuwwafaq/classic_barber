<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barber = Barber::latest()->get();

        return view('Admin.barber.index', ['barber' => $barber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.barber.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'foto' => 'required|mimes:png,jpg,jpeg',
        ]);

        $foto = $request->file('foto');
        $filename = date('Y-m-d') . str_replace(' ', '_', $foto->getClientOriginalName());
        $path = 'foto-barber/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($foto));

        Barber::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'foto' => $path,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('barber.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barber $barber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barber $barber)
    {
        //
        return view('Admin.barber.edit', compact('barber'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barber $barber)
    {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'foto' => 'nullable|mimes:png,jpg,jpeg',
        ]);
    
        // Update nama dan alamat
        $barber->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
    
        // Update foto jika ada
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = date('Y-m-d') . str_replace(' ', '_', $foto->getClientOriginalName());
            $path = 'foto-barber/' . $filename;
    
            // Hapus foto lama jika ada
            if (Storage::disk('public')->exists($barber->foto)) {
                Storage::disk('public')->delete($barber->foto);
            }
    
            Storage::disk('public')->put($path, file_get_contents($foto));
            $barber->update(['foto' => $path]);
        }
    
        return redirect()->route('barber.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request)
    {
        // Ambil id pengguna yang akan dihapus dari permintaan
        $barberid = $request->input('id');

        // Cari pengguna berdasarkan id
        $barber = Barber::findOrFail($barberid);

        // Hapus foto dari penyimpanan jika ada
        if (Storage::disk('public')->exists($barber->foto)) {
            Storage::disk('public')->delete($barber->foto);
        }

        // Hapus pengguna
        $barber->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
