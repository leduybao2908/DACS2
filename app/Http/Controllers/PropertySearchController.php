<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use Illuminate\Http\Request;

class PropertySearchController extends Controller
{
    public function displayTopCities()
{
    // Lấy các thành phố có nhiều phòng nhất
    $cities = Room::select('city', DB::raw('COUNT(*) as total_rooms'))
        ->groupBy('city')
        ->orderByDesc('total_rooms')
        ->limit(4)
        ->get();

    // Truyền dữ liệu thành phố vào view home
    return view('home', compact('cities'));
}

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

public function getFeaturedProperties()
{
    // Fetch the top 6 rooms with the highest rating and review count
    $featuredRooms = Room::orderByDesc('avg_rating')
                         ->orderByDesc('reviews_count')
                         ->take(6)
                         ->get();

    return $featuredRooms;
}
public function homePage()
{   
    $featuredRooms= $this->getFeaturedProperties();
    // Lấy các thành phố có nhiều đánh giá và rating nhất
    $featuredCities =$this->getFeaturedCity();
        // Trả về view với dữ liệu
    return view('home', compact('featuredCities','featuredRooms'));
}
public function getFeaturedCity()
{
    // Lấy các city có tổng reviews_count và rating cao nhất
    $featuredCities = Room::select('city', 
                    DB::raw('SUM(reviews_count) as total_reviews'), 
                    DB::raw('AVG(avg_rating) as avg_rating'))
                ->groupBy('city')
                ->orderByDesc('total_reviews') // Ưu tiên city có nhiều đánh giá nhất
                ->orderByDesc('avg_rating')   // Sau đó ưu tiên city có rating cao
                ->take(5)                     // Lấy top 5 city
                ->get();

    return $featuredCities;
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
