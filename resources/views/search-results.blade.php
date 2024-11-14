@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Search Results</h2>
        @if($properties->isEmpty())
            <p>No properties found matching your search criteria.</p>
        @else
            <div class="row">
                @foreach($properties as $property)
                    <div class="col-md-4">
                        <div class="property-card">
                            <img src="{{ $property->image_url }}" alt="{{ $property->title }}" class="img-fluid">
                            <h3>{{ $property->title }}</h3>
                            <p><strong>Type:</strong> {{ $property->type == 1 ? 'House' : 'Apartment' }}</p>
                            <p><strong>City:</strong> {{ $property->city }}</p>
                            <p><strong>Price:</strong> {{ number_format($property->price) }} VND</p>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
