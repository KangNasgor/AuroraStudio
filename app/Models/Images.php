<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_wisuda',
        'foto_personal',
        'foto_grup',
        'foto_maternity',
        'created_at',
        'updated_at',
        'status_aktif',
    ];
}
