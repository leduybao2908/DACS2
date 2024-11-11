{{-- resources/views/search/results.blade.php --}}
<h1>Kết quả tìm kiếm</h1>

@if($results->isEmpty())
    <p>Không tìm thấy kết quả nào.</p>
@else
    <ul>
        @foreach($results as $property)
            <li>{{ $property->property_title }} - {{ $property->location }} - ${{ $property->price_per_month }} per month</li>
        @endforeach
    </ul>
@endif
