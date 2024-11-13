<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional, Laravel uses the plural form of the model by default)
    protected $table = 'reviews';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'user_id', 
        'room_id', 
        'rating', 
        'comment', 
        'date', 
        'images_url'
    ];

    // Cast images_url to an array when retrieving it
    protected $casts = [
        'images_url' => 'array',
        'date' => 'datetime',
    ];

    // Optionally, define relationships if needed (e.g., with User or Room)
   // Review.php
   public function room()
   {
       return $this->belongsTo(Room::class, 'room_id'); 
   }

  // Review model (Review.php)


  public function user()
  {
      return $this->belongsTo(User::class);  // Quan hệ giữa Review và User
  }

}
