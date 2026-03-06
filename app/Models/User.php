<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // primarikey
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

    // Supaya Laravel Auth membaca kolom Password
    public function getAuthPassword()
    {
        return $this->Password;
    }
}