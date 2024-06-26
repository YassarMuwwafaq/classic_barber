<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKaryawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tanggal'];

    public function karyawan(){
        return $this->belongsTo(Karyawan::class);
    }
}
