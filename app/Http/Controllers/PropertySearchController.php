<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class PropertySearchController extends Controller
{
    public function search(Request $request)
    {
        // Tạo query cơ bản
        $query = Room::query();

        if ($request->has('title') && !empty($request->title)) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        if ($request->has('location') && !empty($request->location)) {
            $query->where('location', 'LIKE', '%' . $request->location . '%');
        }

        if ($request->has('price') && !empty($request->price)) {
            $query->where('price', '<=', $request->price);
        }

        if ($request->has('area') && !empty($request->area)) {
            $query->where('area', '>=', $request->area);
        }

        if ($request->has('city') && !empty($request->city)) {
            $query->where('city', 'LIKE', '%' . $request->city . '%');
        }

        if ($request->has('type') && !empty($request->type)) {
            $query->where('type', '=', $request->type);
        }

        // Get the search results with pagination
        $rooms = $query->paginate(6);


        // Trả về view với các kết quả tìm kiếm
        return view('views.All-rooms', compact('rooms'));
    }
}
