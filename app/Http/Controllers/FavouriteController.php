<?php

namespace App\Http\Controllers;

use App\Models\FavouriteProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    // Hàm lưu Favourite Property
    public function store(Request $request)
    {
        // Validate room_id
        $request->validate([
            'room_id' => 'required|exists:rooms,room_id' // Đảm bảo room_id tồn tại trong bảng rooms
        ]);

        // Kiểm tra nếu room đã tồn tại trong favourites
        $exists = FavouriteProperty::where('user_id', Auth::id())
            ->where('room_id', $request->room_id)
            ->exists();

        if ($exists) {
            return back()->with('error', 'Room is already in your favourites');
        }

        // Thêm room vào favourites
        FavouriteProperty::create([
            'user_id' => Auth::id(),
            'room_id' => $request->room_id
        ]);

        return back()->with('success', 'Room added to favourites');
    }

    // Hàm hiển thị danh sách Favourite Properties
    public function index()
    {
        // Lấy danh sách các property yêu thích của người dùng
        $favouriteProperties = FavouriteProperty::with('room') // Quan hệ với Room model
            ->where('user_id', Auth::id())
            ->get();
    
        // Trả về view với dữ liệu
        return view('user.favourites', ['favouriteProperties' => $favouriteProperties]);
    }
    // Hàm xóa Favourite Property
    public function destroy($id)
    {
        // Xóa room khỏi danh sách favourites
        $favourite = FavouriteProperty::where('id', $id)
            ->where('user_id', Auth::id())
            ->first();

        if ($favourite) {
            $favourite->delete();
            return back()->with('success', 'Favourite property removed successfully');
        }

        return back()->with('error', 'Favourite property not found');
    }
}
