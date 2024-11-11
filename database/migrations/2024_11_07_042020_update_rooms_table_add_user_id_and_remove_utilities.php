<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            // Remove 'utilities' column
            $table->dropColumn('utilities');
            
            // Add 'user_id' column to store the ID of the tenant/occupant
            $table->unsignedBigInteger('user_id')->nullable()->after('room_id');

            // Define 'user_id' as a foreign key referencing 'id' on the 'users' table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            // Add back 'utilities' column as JSON or Text, whichever suits your original structure
            $table->json('utilities')->nullable();

            // Drop the 'user_id' column and its foreign key
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
