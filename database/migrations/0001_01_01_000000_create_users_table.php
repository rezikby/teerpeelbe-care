<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('Username', 25)->primary();
            $table->string('Nama', 25);
            $table->enum('Asal', [
                'Aceh','Sumatera Utara','Sumatera Barat','Riau','Kepulauan Riau','Jambi',
                'Sumatera Selatan','Kepulauan Bangka Belitung','Bengkulu','Lampung',
                'DKI Jakarta','Jawa Barat','Jawa Tengah','DI Yogyakarta','Jawa Timur',
                'Banten','Bali','Nusa Tenggara Barat','Nusa Tenggara Timur',
                'Kalimantan Barat','Kalimantan Tengah','Kalimantan Selatan',
                'Kalimantan Timur','Kalimantan Utara','Sulawesi Utara',
                'Sulawesi Tengah','Sulawesi Selatan','Sulawesi Tenggara',
                'Gorontalo','Sulawesi Barat','Maluku','Maluku Utara',
                'Papua','Papua Barat','Papua Selatan','Papua Tengah',
                'Papua Pegunungan','Papua Barat Daya'
            ]);
            $table->text('Alamat');
            $table->string('No_Telpon', 13);
            $table->string('Password');
            $table->enum('role', ['admin','users'])->default('users');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};