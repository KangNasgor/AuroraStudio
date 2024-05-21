<?php

namespace App\Models;
<<<<<<< HEAD
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
=======

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
>>>>>>> 64c44a93efdb34e7998fabcfc13992e2a93c9d64
