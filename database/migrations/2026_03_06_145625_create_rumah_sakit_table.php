<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rumah_sakit', function (Blueprint $table) {
            $table->id();
            $table->string('cover');
            $table->string('nama_rumah_sakit');
            $table->decimal('rating', 2, 1)->nullable();
            $table->text('alamat');
            $table->string('nomor_kontak');
            $table->enum('kategori', ['Darurat', 'Bedah', 'Kardiologi']);
            $table->integer('nomor_kamar');
            $table->enum('status', ['Buka', 'Tutup']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rumah_sakit');
    }
};