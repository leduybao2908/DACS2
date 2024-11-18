<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->id('mail_id');
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('room_id');
            $table->string('mail_request');
            $table->string('phone_number');
            $table->text('message');
            $table->string('name_request');
            $table->timestamps();

            // Foreign key constraint (assuming owner_id relates to users table)
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notification');
    }
}
