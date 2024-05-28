<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //setiap karyawan dimiliki satu barber
    public function barber(){
        return $this->belongsTo(Barber::class);
    }

    public function Layanans()
    {
        return $this->belongsToMany(Layanan::class, 'layanan_karyawans','karyawan_id', 'layanan_id')
        ->withPivot('harga');
    }

    public function jadwal_karyawans(){
        return $this->hasMany(JadwalKaryawan::class);
    }

}
