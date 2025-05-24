<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_kamar',
        'tipe_kamar',
        'harga',
        'status',
        'gambar',
        'deskripsi',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
