@extends('website.layouts.main')


@section('content')
    <div class="container">
        <p class="paragraph dark">KlimatKontrol – это климатическая компания полного цикла.</p>
        <p class="paragraph dark">Основным направленем деятельности является продажа, монтаж, сервисное обслуживание и
            ремонт систем вентиляции и кондиционирования.</p>
        <p class="paragraph dark">Наш большой опыт работы в климатической сфере даёт возможность осуществлять проекты
            любой сложности. Обращайтесь в нашу компанию и вы получите максимально качественное оборудование и
            услуги.</p>

        <h1 class="h2 text-center">Примеры наших работ:</h1>
        <br>
        <br>
        <div class="row mb-4">
            <div class="col-6 col-lg-4">

                <figure>
                    <a class="d-block mb-4" data-fancybox="images"
                       href="{{ asset('website/images/IMG_1686-min.JPG') }}" data-width="1536" data-height="2304">
                        <img class="img-fluid" src="{{ asset('website/images/IMG_1686-min.JPG') }}">
                    </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images"
                       href="{{ asset('website/images/IMG_1681-min.JPG') }}" data-width="1279" data-height="853">
                        <img class="img-fluid" src="{{ asset('website/images/IMG_1681-min.JPG') }}">
                    </a>
                </figure>
            </div>
            <div class="col-6 col-lg-4">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images"
                       href="{{ asset('website/images/IMG_1683-min.JPG') }}" data-width="1279" data-height="719">
                        <img class="img-fluid" src="{{ asset('website/images/IMG_1683-min.JPG') }}">
                    </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images"
                       href="{{ asset('website/images/IMG_1687-min.JPG') }}" data-width="1279" data-height="853">
                        <img class="img-fluid" src="{{ asset('website/images/IMG_1687-min.JPG') }}">
                    </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images"
                       href="{{ asset('website/images/IMG_1688-min.JPG') }}" data-width="1020" data-height="858">
                        <img class="img-fluid" src="{{ asset('website/images/IMG_1688-min.JPG') }}">
                    </a>
                </figure>
            </div>
            <div class="col-6 col-lg-4 d-none d-lg-block">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images"
                       href="{{ asset('website/images/IMG_1689-min.JPG') }}" data-width="1279" data-height="870">
                        <img class="img-fluid" src="{{ asset('website/images/IMG_1689-min.JPG') }}">
                    </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images"
                       href="{{ asset('website/images/IMG_1694-min.JPG') }}" data-width="1519" data-height="2279">
                        <img class="img-fluid" src="{{ asset('website/images/IMG_1694-min.JPG') }}">
                    </a>
                </figure>
            </div>
        </div>
    </div>
@endsection
