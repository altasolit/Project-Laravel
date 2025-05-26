<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
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
        return $this->hasMany(Reservation::class, 'room_id');
    }
     public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'kamar_fasilitas', 'kamar_id', 'fasilitas_id');
    }
}
