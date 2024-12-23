<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteProperty extends Model  // Đổi tên model nếu cần thiết
{
    use HasFactory;

    protected $table = 'favourite_properties';  // Đặt tên bảng đúng

    protected $fillable = ['user_id', 'room_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'room_id'); // Đúng khóa
    }
}