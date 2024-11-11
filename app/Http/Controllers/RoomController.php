<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;
class RoomController extends Controller
{
    /**
     * Display a listing of the rooms.
     */
    public function index()
    {
        $rooms = Room::where('owner_id', Auth::id())->paginate(10); 
        return view('user.my-listings', compact('rooms'));  // Trả dữ liệu ra view
    }

    /**
     * Show the form for creating a new room.
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created room in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'area' => 'required|numeric',
        'location' => 'required|string',
        'status' => 'nullable|string|in:available,occupied',  // Default is 'available'
    ]);

    // Create a new room with the authenticated user as the owner
    $room = new Room();
    $room->title = $request->input('title');
    $room->description = $request->input('description');
    $room->price = $request->input('price');
    $room->area = $request->input('area');
    $room->location = $request->input('location');
    $room->status = $request->input('status', 'available');  // Default status is 'available'
    $room->owner_id = Auth::id();  // Set the owner_id to the authenticated user
    $room->user_id = null;  // No tenant initially

    // Save the room first to generate the room_id
    $room->save();

    // Handle image uploads after saving the room (so we can use room_id)
    if ($request->hasFile('images')) {
        $imagePaths = [];
        foreach ($request->file('images') as $image) {
            // Generate unique filename based on owner_id, room_id, and current time
            $filename = Auth::id() . '-' . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
            
            $path = $image->storeAs('rooms', $filename, 'public');

            $imagePaths[] = $path;
        }

        $room->images = json_encode($imagePaths);
        $room->save();  
    }

    // Redirect with success message
    return redirect()->route('my-listings')->with('success', 'Room added successfully!');
}

public function displayAllRooms()
{
    // Retrieve all rooms with pagination
    $rooms = Room::paginate(10);
    return view('All-rooms', compact('rooms'));
}
    /**
     * Display the specified room.
     */
    public function show($room_id)
    {
        // Find the room by room_id
        $room = Room::with('owner')->findOrFail($room_id);
        
    
        // Return the view with the room data
        return view('show', compact('room'));
    }
    /**
     * Show the form for editing the specified room.
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified room in storage.
     */
    public function update(Request $request, $room_id)
{
    // Lấy phòng theo room_id từ cơ sở dữ liệu
    $room = Room::findOrFail($room_id);

    // Cập nhật các trường thông tin phòng
    $room->title = $request->input('title');
    $room->description = $request->input('description');
    $room->price = $request->input('price');
    $room->area = $request->input('area');
    $room->location = $request->input('location');

    // Mảng để lưu các đường dẫn ảnh sau khi lưu
    $imagePaths = [];

    // Nếu có hình ảnh mới, xử lý việc lưu trữ hình ảnh
    if ($request->hasFile('images')) {
        $imagePaths = [];
        foreach ($request->file('images') as $image) {
            // Generate unique filename based on owner_id, room_id, and current time
            $filename = Auth::id() . '-' . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
            
            $path = $image->storeAs('rooms', $filename, 'public');

            $imagePaths[] = $path;
        }

        $room->images = json_encode($imagePaths);
        $room->save();  
    }


    // Lưu các thay đổi vào cơ sở dữ liệu
    $room->save();

    return redirect()->route('my-listings')->with('success', 'Room updated successfully!');
}

    /**
     * Remove the specified room from storage.
     */
    public function destroy($room_id)
    {
        // Tìm phòng theo room_id
        $room = Room::findOrFail($room_id);

        // Xóa phòng
        $room->delete();

        // Quay lại trang danh sách phòng với thông báo thành công
        return redirect()->route('my-listings')->with('success', 'Room deleted successfully!');
    }




}
