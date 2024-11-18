<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InquiryController extends Controller
{       

    public function index(Request $request)
    {
        // Get the authenticated user (owner)
        $owner_id = Auth::id();

        // Retrieve messages for the owner from the notifications table
        $messages = DB::table('notification')
                        ->where('owner_id', $owner_id)
                        ->orderBy('created_at', 'desc')  // Sort by the most recent messages
                        ->get();

        // Pass the messages to the view
        return view('user.Notification', compact('messages'));
    }
    public function store(Request $request)
{   

    // Validate form inputs
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'phone_number' => 'required|string|max:15',
        'email_address' => 'required|email|max:255',
        'message' => 'required|string',  // Nội dung từ Quill (rich text)
    ]);

    // Lấy room_id từ form
    $roomId = $request->input('room_id');
    $ownerId = $request->input('onwer_id');

    // Lưu vào bảng notification
    DB::table('notification')->insert([
        'owner_id'=>$ownerId,
        'room_id' => $roomId,                     // Lưu room_id
        'mail_request' => $validated['email_address'], // Lưu email của người gửi
        'phone_number' => $validated['phone_number'],  // Lưu số điện thoại
        'message' => $validated['message'],           // Lưu tin nhắn (HTML)
        'name_request' => $validated['full_name'],    // Lưu tên người gửi
        'created_at' => now(),                        // Lưu thời gian
    ]);

    // Trả về phản hồi hoặc chuyển hướng
    return redirect()->back()->with('success', 'Request submitted successfully!');
}
}