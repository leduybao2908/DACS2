@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Property Images</h2>
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $image) }}" class="card-img-top" alt="Property Image">
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
