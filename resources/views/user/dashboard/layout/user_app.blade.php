<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>@yield('title', 'Default Title')</title>
    
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    
    @stack('styles')
    
</head>

<body class="{{ $bodyClass ?? 'maxw1600 m0a dashboard-bd' }}">
    <div id="wrapper" class="int_main_wraapper">
    @include('user.dashboard.layout.header')
    
    @yield('content')

    

   <!-- ARCHIVES JS -->
   @stack('scripts')
</div>
</body>

</html>
