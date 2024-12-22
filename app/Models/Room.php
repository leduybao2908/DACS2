<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'room_id';
    protected $fillable = [
        'owner_id',
        'user_id',
        'location',
        'price',
        'description',
        'status',
        'utilities',
        'images',
        'area',
        'title',
        'property_description',
        'city', // Add city to fillable
        'type', // Add type to fillable
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'images' => 'array',
    ];

    /**
     * Get the owner of the room.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * Get the user who is staying in the room.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Giải mã JSON và lấy ảnh đầu tiên
    public function getFirstImageAttribute()
    {
        $images = json_decode($this->images, true);
        return isset($images[0]) ? $images[0] : null;  // Trả về ảnh đầu tiên trong mảng
    }


    
    /**
     * Get the reviews for the room.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'room_id');
    }
}
