<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->decimal('avg_rating', 3, 2)->default(0); // cột trung bình rating
        });
    }
    

public function down()
{
    Schema::table('rooms', function (Blueprint $table) {
        $table->dropColumn('avg_rating');
    });
}
};
