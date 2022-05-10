<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="a841398eea77709b" />

    <meta content='Магазин Кондиционеров Климат Контроль в Барановичах, в Несвиже, В Новогрудке, в Слониме, в Берёзе, в Ляховичах' name="keywords">
    <meta content='Магазин Климат Контроль – мы предлагаем купить кондиционер в Барановичах, в Ляховичах, в Несвиже, в Новогрудке, в Берёзе, в Слониме по выгодням ценам. Оформим заказ, привезём и установим!' name="description">
    <meta content="index,follow" name="robots">
    <meta content="website" property="og:type">
    <meta content="https://klimatkontrol.by/" property="og:url">
    <meta content="Магазин Кондиционеров klimatkontrol" property="og:title">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VZTHG6ZWP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VZTHG6ZWP4');
    </script>

    <title>Кондиционеры</title>
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
