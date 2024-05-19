<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('layanan_barbers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barber_id')->constrained('Barbers');
            $table->foreignId('layanan_id')->constrained('Layanans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_barber');
    }
};
