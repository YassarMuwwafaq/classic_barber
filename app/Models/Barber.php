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

    public function layanans()
    {
        return $this->belongsToMany(Layanan::class, 'layanan_barbers', 'barber_id', 'layanan_id');
    }

    //satu barber memiliki banyak lkaryawan
    public function karyawan(){
        return $this->hasMany(Karyawan::class);
    }
}
