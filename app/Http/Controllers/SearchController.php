<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property; // Giả sử Property là model bạn đang dùng để lưu thông tin bất động sản

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Lấy dữ liệu từ form tìm kiếm
        $keyword = $request->input('keyword');
        $propertyType = $request->input('property_type');
        $location = $request->input('location');

        // Thực hiện query tìm kiếm
        $query = Property::query();

        if ($keyword) {
            $query->where('name', 'LIKE', '%' . $keyword . '%');
        }
        if ($propertyType) {
            $query->where('type', $propertyType);
        }
        if ($location) {
            $query->where('location', $location);
        }

        $results = $query->get();

        // Trả về view kèm với kết quả tìm kiếm
        return view('search.results', compact('results'));
    }
}
