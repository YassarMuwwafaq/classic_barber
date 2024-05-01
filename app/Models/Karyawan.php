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

    public function jadwal_karyawan(){
        return $this->belongsTo(JadwalKaryawan::class);
    }

}
