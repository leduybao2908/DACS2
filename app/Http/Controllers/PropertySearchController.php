<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class PropertySearchController extends Controller
{

    public function search(Request $request)
    {
        $title = $request->input('title');
        $type = $request->input('type');
        $city = $request->input('city');  // Lấy giá trị city từ form
    
        // Tiến hành tìm kiếm
        $query = Room::query();
    
        if ($title) {
            $query->where('title', 'like', '%' . $title . '%');
        }
    
        if ($type) {
            $query->where('type', $type);
        }
    
        if ($city) {
            $query->where('city', $city);
        }
    
        $rooms = $query->paginate(10);  // Phân trang nếu cần
    
        return view('all-rooms', compact('rooms'));
    }
    
}
