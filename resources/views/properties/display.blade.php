@extends('uneditfile.properties-full-list-1') <!-- Assuming you're using a layout -->

@section('content')

    @foreach ($properties as $property)
    <div class="item col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0" data-aos="fade-up">
        <div class="project-single mb-0 bb-0">
            <div class="project-inner project-head">
                <div class="homes">
                    <!-- homes img -->
                    <a href="{{ route('properties.list', $property->id) }}" class="homes-img">
                        <div class="homes-tag button alt sale">For Sale</div>
                        <div class="homes-price">${{ number_format($property->price_per_month, 2) }}/mo</div>
                        <img src="{{ asset('storage/' . $property->images) }}" alt="{{ $property->property_title }}" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- homes content -->
    <div class="col-lg-8 col-md-12 homes-content pb-0 mb-44" data-aos="fade-up">
        <!-- homes address -->
        <h3><a href="{{ route('properties.list', $property->id) }}">{{ $property->property_title }}</a></h3>
        <p class="homes-address mb-3">
            <a href="{{ route('properties.list', $property->id) }}">
                <i class="fa fa-map-marker"></i><span>{{ $property->location }}</span>
            </a>
        </p>
        <!-- homes List -->
        <ul class="homes-list clearfix pb-3">
            <li class="the-icons">
                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                <span>{{ $property->area }} Sqft</span>
            </li>
        </ul>
        <div class="footer">
            <a href="agent-details.html">
                <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2"> {{ $property->owner->name ?? 'Owner Name' }}
            </a>
            <span>
                <i class="fa fa-calendar"></i> {{ $property->created_at->format('d M Y') }}
            </span>
        </div>
    </div>
    @endforeach

@endsection
