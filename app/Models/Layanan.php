<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //setiap layanan dimiliki satu barber
    public function barber(){
        return $this->belongsTo(Barber::class);
    }
}
