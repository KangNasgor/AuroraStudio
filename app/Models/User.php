<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Kolom yang dapat diisi
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Kolom yang harus disembunyikan dalam array
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Tipe casting atribut
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}