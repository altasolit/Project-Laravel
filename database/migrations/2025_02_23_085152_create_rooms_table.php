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
            $table->string('room_number')->unique();
            $table->enum('type', ['Standard', 'Superior', 'Deluxe', 'Executive']);
            $table->decimal('price_per_night', 10, 2);
            $table->enum('status', ['Tersedia', 'Terisi', 'Diperbaiki'])->default('Tersedia');
            $table->string('image')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
