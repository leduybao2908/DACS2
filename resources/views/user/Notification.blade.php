@extends('user.dashboard.layout.user_app')
@section('title', 'Notification')
@push('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashbord-mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/default.css') }}">
@endpush

@php
    $bodyClass = 'inner-pages maxw1600 m0a dashboard-bd';
@endphp

@include('layouts.navbar')
@section('content')
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row">
                @include('user.dashboard.layout.menu')
                <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">

                <!-- Display Notifications -->
                <div class="col-lg-9 col-md-12">
                    <h3>Your Sent Messages</h3>
                    <div class="notification-list">
                        @foreach($messages as $message)
                            <div class="notification-item">
                                <div class="notification-header">
                                    <strong>{{ $message->name_request }}</strong> ({{ $message->mail_request }})
                                    <span class="notification-date">{{ \Carbon\Carbon::parse($message->created_at)->format('d M, Y') }}</span>
                                </div>
                                <div class="notification-body">
                                    <p><strong>Message:</strong> {!! nl2br(e($message->message)) !!}</p>
                                    <p><strong>Phone Number:</strong> {{ $message->phone_number }}</p>
                                    <p><strong>Property ID:</strong> {{ $message->room_id }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection





@push('scripts')
    <!-- ARCHIVES JS -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick2.js') }}"></script>
    <script src="{{ asset('js/fitvids.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/lightcase.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/searched.js') }}"></script>
    <script src="{{ asset('js/dashbord-mobile-menu.js') }}"></script>
    <script src="{{ asset('js/forms-2.js') }}"></script>
    <script src="{{ asset('js/color-switcher.js') }}"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

   
    <script>
        $(".dropzone").dropzone({
            dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
        });
    </script>




    <script>
        $(".header-user-name").on("click", function() {
            $(".header-user-menu ul").toggleClass("hu-menu-vis");
            $(this).toggleClass("hu-menu-visdec");
        });

        <
        /scrip>
    @endpush
