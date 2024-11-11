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
           

           

            // Add 'images' column as JSON to store image paths array
            $table->json('images')->nullable()->after('user_id');
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
            // Add back 'utilities' column
            $table->json('utilities')->nullable();

            // Drop 'user_id' column and its foreign key
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');

            // Drop 'images' column
            $table->dropColumn('images');
        });
    }
};
