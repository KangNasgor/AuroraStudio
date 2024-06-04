<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bookings extends Model
{
    use HasFactory;
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
    public function photography_sessions(): HasMany
    {
        return $this->hasMany(Photography_sessions::class, 'bookings_id');
    }
    protected $fillable = [
        'name',
        'phone',
        'email',
        'booking_date',
        'jam',
        'tempat',
        'lokasi',
        'status',
        'payment_status',
        'created_at',
        'updated_at',
        'paket',
        'status_aktif',
    ];
}
