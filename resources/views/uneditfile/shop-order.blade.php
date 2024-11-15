<!doctype html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/shop-order.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:16 GMT -->
<head>
    <title>Order</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&amp;display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/invoice.css">
    <!-- STYLES CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="{{ asset('font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos2.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/maps.css') }}">
<link rel="stylesheet" id="color" href="{{ asset('css/colors/pink.css') }}">
</head>

<body>
    @include('layouts.navbar')
    <!-- Print Button -->
    <div class="print-button-container">
        <a href="javascript:window.print()" class="print-button">Print this invoice</a>
    </div>
    <div class="container invoice mb-0">
        <div class="row">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row p-5 the-five">
                            <div class="col-md-6">
                                <img src="images/logo-red.svg" width="80" alt="Logo">
                            </div>

                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold mb-1">Invoice #550</p>
                                <p class="text-muted">Due to: 4 Jan, 2020</p>
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row pb-5 p-5 the-five">
                            <div class="col-md-6">
                                <h3 class="font-weight-bold mb-4">Invoice To</h3>
                                <p class="mb-0 font-weight-bold">Carls Jhons</p>
                                <p class="mb-0">Acme Inc</p>
                                <p class="mb-0">Est St, 77 - Central Park, NYC</p>
                                <p class="mb-0">6781 45P</p>
                            </div>

                            <div class="col-md-6 text-right">
                                <h3 class="font-weight-bold mb-4">Payment Details</h3>
                                <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                                <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                                <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                                <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                            </div>
                        </div>

                        <div class="row p-5 the-five">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Price</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">VAT (10%)</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Standard Plan</td>
                                            <td>$40</td>
                                            <td>$7.55</td>
                                            <td>$47.55</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                            <div class="py-3 px-5 text-left">
                                <div class="mb-2">Grand Total</div>
                                <div class="h2 font-weight-light">$42.79</div>
                            </div>

                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Discount</div>
                                <div class="h2 font-weight-light">10%</div>
                            </div>

                            <div class="py-3 px-5 text-left">
                                <div class="mb-2">Sub - Total</div>
                                <div class="h2 font-weight-light">$47.55</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ·page -->

    <!-- JQUERY JS -->
    <script src="js/jquery-3.5.1.min.js"></script>

</body>


<!-- Mirrored from code-theme.com/html/findhouses/shop-order.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:17 GMT -->
</html>