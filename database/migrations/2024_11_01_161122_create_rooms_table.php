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
            $table->unsignedBigInteger('room_id')->primary();
            $table->unsignedBigInteger('owner_id');
            $table->string('location');
            $table->double('price');
            $table->string('description')->nullable();
            $table->string('status');
            $table->json('utilities')->nullable();
            $table->timestamps();
        
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
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
