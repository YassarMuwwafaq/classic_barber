<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataCustomerController extends Controller
{
    //
    public function index() {
        // Ambil semua pengguna dengan peran 'customer'
        $user = User::role('customer')->latest()->get();
 
        return view('Admin.user.index', ['user' => $user]);
     }
 
     public function destroy(Request $request)
     {
         // Ambil id pengguna yang akan dihapus dari permintaan
         $userId = $request->input('id');
 
         // Cari pengguna berdasarkan id
         $user = User::findOrFail($userId);
 
         // Hapus pengguna
         $user->delete();
 
         // Redirect ke halaman sebelumnya dengan pesan sukses
         return redirect()->back()->with('success', 'User berhasil dihapus.');
     }
}
