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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_type');
            $table->enum('room_status',['0','1'])
            ->default(1)
            ->comment('0:booking,1:free');
            $table->timestamps();

            //foreign key
            $table->unsignedBigInteger('roomType_id');
            $table->foreign('roomType_id')
            ->references('id')
            ->on('room_types')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
