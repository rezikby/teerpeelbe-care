<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // primary key
    protected $primaryKey = 'Username';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Username',
        'Nama',
        'Asal',
        'Alamat',
        'No_Telpon',
        'Password',
        'role'
    ];

    protected $hidden = [
        'Password',
    ];

    // supaya Laravel Auth membaca kolom Password
    public function getAuthPassword()
    {
        return $this->Password;
    }
}