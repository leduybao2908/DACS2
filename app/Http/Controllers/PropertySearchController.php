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
        $city = $request->input('city');
        $sortby = $request->input('sortby');
        $priceMin = $request->input('price_min');
        $priceMax = $request->input('price_max');
        $areaMin = $request->input('area_min');
        $areaMax = $request->input('area_max');

        // Tiến hành tìm kiếm
        $query = Room::query();

        if ($title) {
            $query->where('title', 'like', '%' . $title . '%');
        }

        if ($type && $type !== 'all') {
            $query->where('type', $type);
        }

        if ($city) {
            $query->where('city', $city);
        }

        // Điều kiện lọc theo khoảng giá
        if ($priceMin && $priceMax) {
            $query->whereBetween('price', [$priceMin, $priceMax]);
        }

        // Điều kiện lọc theo diện tích
        if ($areaMin && $areaMax) {
            $query->whereBetween('area', [$areaMin, $areaMax]);
        }

        // Gọi phương thức sắp xếp
        $rooms = $this->applySorting($query, $sortby);

        // Phân trang kết quả
        $rooms = $rooms->paginate(5);

        return view('all-rooms', compact('rooms'));
    }

    /**
     * Phương thức sắp xếp kết quả
     */
    private function applySorting($query, $sortby)
    {
        switch ($sortby) {
            case 'price_asc':
                return $query->orderBy('price', 'asc');
            case 'price_desc':
                return $query->orderBy('price', 'desc');
            case 'title_asc':
                return $query->orderBy('title', 'asc');
            case 'title_desc':
                return $query->orderBy('title', 'desc');
            default:
                return $query;
        }
    }
}
