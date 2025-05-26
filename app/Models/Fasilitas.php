<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
    'nama_fasilitas',
    'deskripsi',
    'gambar'
    ];
    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'kamar_fasilitas', 'fasilitas_id', 'kamar_id');
    }
}
 