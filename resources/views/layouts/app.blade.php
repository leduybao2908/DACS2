<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Register</title>
    <!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:500,600,800" rel="stylesheet">
<!-- FONT AWESOME -->
<link rel="stylesheet" href="{{ asset('font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timedropper.css') }}">
<link rel="stylesheet" href="{{ asset('css/datedropper.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">


    
</head>
<body>
        @include('layouts.header')
       
            @yield('content')

      
       
</body>
@include('layouts.footer')

 <!-- ARCHIVES JS -->
 <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
 <script src="{{ asset('js/tether.min.js') }}"></script>
 <script src="{{ asset('js/popper.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/mmenu.min.js') }}"></script>
 <script src="{{ asset('js/mmenu.js') }}"></script>
 <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
 <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
 <script src="{{ asset('js/newsletter.js') }}"></script>
 <script src="{{ asset('js/color-switcher.js') }}"></script>
 <script src="{{ asset('js/inner.js') }}"></script>
 <script src="{{ asset('js/jquery-ui.js') }}"></script>
 <script src="{{ asset('js/range-slider.js') }}"></script>
 <script src="{{ asset('js/slick.min.js') }}"></script>
 <script src="{{ asset('js/slick4.js') }}"></script>
 <script src="{{ asset('js/fitvids.js') }}"></script>
 <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('js/popup.js') }}"></script>
 <script src="{{ asset('js/timedropper.js') }}"></script>
 <script src="{{ asset('js/datedropper.js') }}"></script>
 <script src="{{ asset('js/jqueryadd-count.js') }}"></script>
 <script src="{{ asset('js/leaflet.js') }}"></script>
 <script src="{{ asset('js/leaflet-gesture-handling.min.js') }}"></script>
 <script src="{{ asset('js/leaflet-providers.js') }}"></script>
 <script src="{{ asset('js/leaflet.markercluster.js') }}"></script>
 <script src="{{ asset('js/map-single.js') }}"></script>

 <!-- Date Dropper Script-->
 <script>
     $('#reservation-date').dateDropper();

 </script>
 <!-- Time Dropper Script-->
 <script>
     this.$('#reservation-time').timeDropper({
         setCurrentTime: false,
         meridians: true,
         primaryColor: "#e8212a",
         borderColor: "#e8212a",
         minutesInterval: '15'
     });

 </script>

 <script>
     $(document).ready(function() {
         $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
             disableOn: 700,
             type: 'iframe',
             mainClass: 'mfp-fade',
             removalDelay: 160,
             preloader: false,
             fixedContentPos: false
         });
     });

 </script>

 <script>
     $('.slick-carousel').each(function() {
         var slider = $(this);
         $(this).slick({
             infinite: true,
             dots: false,
             arrows: false,
             centerMode: true,
             centerPadding: '0'
         });

         $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
             slider.slick('slickPrev');
         });
         $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
             slider.slick('slickNext');
         });
     });

 </script>
</html>
