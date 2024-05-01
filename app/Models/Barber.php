<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'foto',
    ];

    //satu barber memiliki banyak layanan
    public function layanan(){
        return $this->hasMany(Layanan::class);
    }

    //satu barber memiliki banyak lkaryawan
    public function karyawan(){
        return $this->hasMany(Karyawan::class);
    }
}
