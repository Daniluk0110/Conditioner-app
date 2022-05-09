<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('website/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('website/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">

</head>
<body>

<div class="site-wrap">
    @include('website.includes.header')

    @yield('content')

    @include('website.includes.footer')
</div>

<script src="{{ asset('website/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('website/js/jquery-ui.js') }}"></script>
<script src="{{ asset('website/js/popper.min.js') }}"></script>
<script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('website/js/aos.js') }}"></script>
<script src="{{ asset('website/js/main.js') }}"></script>
</body>
</html>
