<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    // If the table name is not the plural of the model name (notifications)
    protected $table = 'notification';

    // The attributes that are mass assignable
    protected $fillable = [
        'owner_id',
        'room_id',
        'mail_request',
        'phone_number',
        'message',
        'name_request',
        'created_at',
    ];

    // Optionally, you can define any custom methods or relationships here
}
