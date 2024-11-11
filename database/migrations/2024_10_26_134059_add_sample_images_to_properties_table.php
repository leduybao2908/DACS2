<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('properties', function (Blueprint $table) {
        $table->text('sample_images')->nullable()->after('images');
    });
}

public function down()
{
    Schema::table('properties', function (Blueprint $table) {
        $table->dropColumn('sample_images');
    });
}

};
