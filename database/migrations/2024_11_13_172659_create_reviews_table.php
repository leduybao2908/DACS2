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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();  // Tạo cột 'id' (Primary Key)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->integer('rating');  // Cột 'rating' để lưu đánh giá
            $table->text('comment');  // Cột 'comment' để lưu nội dung bình luận
            $table->json('images_url')->nullable();  // Cột 'images_url' lưu URL của ảnh dưới dạng JSON
            $table->timestamp('date')->useCurrent();  // Cột 'date' lưu ngày giờ bình luận được tạo ra
            $table->timestamps();  // Tạo cột 'created_at' và 'updated_at'
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
