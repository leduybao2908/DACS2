<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('full_name')->nullable(); // Cho phép giá trị null

            $table->string('phone_number')->nullable(); // Thêm cột phone_number (có thể null)
            $table->text('message')->nullable(); // Thêm cột message (có thể null)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['full_name', 'phone_number', 'message']);
        });
    }
}
