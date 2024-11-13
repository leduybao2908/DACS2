<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('reviews', function (Blueprint $table) {
        // Chắc chắn rằng reviewId là khóa chính và có thể tự tăng
        $table->bigIncrements('reviewId')->change();  // Chỉnh sửa reviewId thành khóa chính với tự động tăng (auto-increment)
    });
}

public function down()
{
    Schema::table('reviews', function (Blueprint $table) {
        $table->dropColumn('reviewId');
    });
}

};
