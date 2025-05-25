<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kamar_fasilitas', function (Blueprint $table) {
    $table->unsignedBigInteger('kamar_id');
    $table->unsignedBigInteger('fasilitas_id');

    $table->primary(['kamar_id', 'fasilitas_id']);

    $table->foreign('kamar_id')->references('id')->on('rooms')->onDelete('cascade');
    $table->foreign('fasilitas_id')->references('id')->on('fasilitas')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar_fasilitas');
    }
};
