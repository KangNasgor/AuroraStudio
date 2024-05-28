<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

protected $fillable = [
'nama',
'nomor_wa',
'email',
'lokasi',
'paket',
'tempat',
'tanggal',
'jam',
];
}