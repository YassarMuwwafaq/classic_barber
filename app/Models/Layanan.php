<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function barbers()
    {
        return $this->belongsToMany(Barber::class, 'layanan_barbers', 'layanan_id', 'barber_id');
    }
}
