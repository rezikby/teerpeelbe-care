<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    protected $table = 'rumah_sakit';

    protected $fillable = [
        'cover',
        'nama_rumah_sakit',
        'rating',
        'alamat',
        'nomor_kontak',
        'kategori',
        'nomor_kamar',
        'status'
    ];
}