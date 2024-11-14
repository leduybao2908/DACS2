<?php
namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertySearchController extends Controller
{
    public function search(Request $request)
    {
        // Tạo query cơ bản
        $query = Property::query();

        // Tìm kiếm theo tên (title)
        if ($request->has('name') && $request->name) {
            $query->where('title', 'like', '%' . $request->name . '%');
        }

        // Tìm kiếm theo loại bất động sản (type)
        if ($request->has('type') && $request->type) {
            $query->where('type', 'like', '%' . $request->type . '%');
        }

        // Tìm kiếm theo thành phố (city)
        if ($request->has('city') && $request->city) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }

        // Tìm kiếm theo diện tích
        if ($request->has('min_area') && $request->min_area) {
            $query->where('area', '>=', $request->min_area);
        }
        if ($request->has('max_area') && $request->max_area) {
            $query->where('area', '<=', $request->max_area);
        }

        // Tìm kiếm theo giá
        if ($request->has('min_price') && $request->min_price) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->has('max_price') && $request->max_price) {
            $query->where('price', '<=', $request->max_price);
        }

        // Lấy kết quả tìm kiếm
        $properties = $query->get();

        // Trả về view với các kết quả tìm kiếm
        return view('property.search', compact('properties'));
    }
}
