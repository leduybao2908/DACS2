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

    // Convert images to base64 if any
    $images = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            // Read the file contents
            $fileContent = file_get_contents($image->getRealPath());

            // Convert the file content to base64
            $base64Image = 'data:' . $image->getClientMimeType() . ';base64,' . base64_encode($fileContent);

            $images[] = $base64Image;
        }
    }

    // Create the review
    $review = new Review([
        'user_id' => Auth::id(),  // assuming the user is authenticated
        'room_id' => $room->room_id,
        'rating' => $request->rating,
        'comment' => $request->comment,
        'images_url' => json_encode($images), // Store base64 images as JSON
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
