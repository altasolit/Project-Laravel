<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kamar')->unique();
            $table->enum('tipe_kamar', ['Standard', 'Superior', 'Deluxe', 'Executive']);
            $table->decimal('harga', 10, 2);
            $table->enum('status', ['Tersedia', 'Terisi', 'Diperbaiki'])->default('Tersedia');
            $table->string('gambar')->nullable();            
            $table->text('deskripsi');
            $table->timestamps();
        });        
    }
    
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
