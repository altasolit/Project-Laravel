<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservation_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['Pending', 'Paid', 'Verified'])->default('Pending');
            $table->string('payment_method')->nullable(); // e.g., 'Transfer Bank', 'QRIS', dll
            $table->timestamp('payment_date')->nullable();
            $table->string('proof_of_payment')->nullable(); // 🆕 Tambahan jika upload bukti transfer
            $table->timestamps();
        });        
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
