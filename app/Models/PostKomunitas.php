<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostKomunitas extends Model
{
    use HasFactory;

    protected $table = 'post_komunitas';

    protected $fillable = [
        'user_id',
        'judul',
        'isi_post'
    ];
}