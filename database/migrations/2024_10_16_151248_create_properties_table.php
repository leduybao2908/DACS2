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
    Schema::create('properties', function (Blueprint $table) {
        $table->id(); // Cột id tự động tăng
        $table->string('property_title'); // Tên phòng
        $table->string('location'); // Địa điểm
        $table->decimal('price_per_month', 10, 2); // Giá thuê mỗi tháng
        $table->decimal('electricity_price', 10, 2); // Giá tiền điện hàng tháng
        $table->decimal('water_price', 10, 2); // Giá tiền nước hàng tháng
        $table->decimal('area', 8, 2); // Diện tích
        $table->unsignedBigInteger('owner_id'); // ID chủ sở hữu
        $table->text('description')->nullable(); // Mô tả
        $table->timestamps(); // Thời gian tạo và cập nhật
        
        // Thiết lập khóa ngoại cho owner_id (giả sử bảng users tồn tại)
        $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
    });
}

public function down(): void
{
    Schema::dropIfExists('properties');
}

};
