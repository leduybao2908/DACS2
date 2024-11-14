<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ReviewController extends Controller
{
    // Store a new review
    // Store a new review
public function store(Request $request, Room $room)
{
    // Validate the request
    $request->validate([
        'rating' => 'required|integer|between:1,5',
        'comment' => 'required|string|max:1000',
        'images' => 'nullable|array|max:5',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Store images if any
    $images = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            // Generate a custom filename based on user_id, room_id, and the current timestamp
            $filename = Auth::id() . '-' . $room->room_id . '-' . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
            
            // Store image with the generated filename
            $images[] = $image->storeAs('reviews', $filename, 'public');
        }
    }

    // Create the review
    $review = new Review([
        'user_id' => Auth::id(),  // assuming the user is authenticated
        'room_id' => $room->room_id,
        'rating' => $request->rating,
        'comment' => $request->comment,
        'images_url' => json_encode($images),
        'date' => now(),  // Set current date and time
    ]);

    $review->save();

    // Update the average rating in the rooms table
    $avgRating = Review::where('room_id', $room->room_id)->avg('rating');
    $room->avg_rating = $avgRating;
    $room->reviews_count = $room->reviews()->count();
    $room->save();

    return redirect()->route('rooms.show', ['room' => $room->room_id])->with('success', 'Review added successfully!');
}

    

    public function show($room_id)
    {
        $room = Room::with('reviews.user')->findOrFail($room_id);
    
       
        return view('rooms.show', compact('room'));
    }
    
}
