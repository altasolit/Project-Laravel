<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('room_id')->nullable()->constrained()->onDelete('set null');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('guests');
            $table->enum('payment_status', ['Pending', 'Paid', 'Verified'])->default('Pending');
            $table->enum('booking_status', ['Pending', 'Confirmed', 'Checked-In', 'Canceled', 'Completed'])->default('Pending');
            $table->decimal('total_price', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
