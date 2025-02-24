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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('checkInDate');
            $table->date('checkOutDate');
            $table->enum('paymentStatus',['0','1'])
            ->default(1)
            ->comment('0:non-paid,1:paid');
            $table->timestamps();

            //foreign key
            $table->unsignedBigInteger('guest_id');
            $table->foreign('guest_id')
            ->references('id')
            ->on('guests')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')
            ->references('id')
            ->on('rooms')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
