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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->date('date_issued');
            $table->decimal('total_amount',10,2);
            $table->string('payment_method',10,2);
            $table->timestamps();

            //foreign key
            $table->unsignedBigInteger('reservation_id');
            $table->foreign('reservation_id')
            ->references('id')
            ->on('reservations')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
