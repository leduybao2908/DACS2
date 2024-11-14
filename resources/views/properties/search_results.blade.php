@extends('layouts.app')

@section('content')
    <h2>Kết quả tìm kiếm</h2>

    @if($properties->isEmpty())
        <p>Không tìm thấy kết quả phù hợp.</p>
    @else
        <ul>
            @foreach($properties as $property)
                <li>{{ $property->name }} - {{ $property->city }} - ${{ $property->price }}</li>
            @endforeach
        </ul>
    @endif
@endsection
