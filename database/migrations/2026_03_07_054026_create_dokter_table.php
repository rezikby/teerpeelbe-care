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
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('foto_profile');
            $table->string('nama');
            $table->enum('spesialis', ['Cardiologist(spesialis jantung dan pembuluh darah)', 
            'Pediatrician(spesialis anak)', 'Dermatologist( spesialis kulit dan kelamin (Sp.KK/Sp.DVE)']);
            $table->string('pengalaman');
            $table->decimal('rating', 2, 1)->nullable();
            $table->string('jadwal');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};
