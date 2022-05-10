@extends('website.layouts.main')

@section('content')
    <div class="site-blocks-cover" style="background-image: url({{ asset('website/images/hero_1.jpg') }});"
         data-aos="fade">
        <div class="container">
            <div class="row align-items-start align-items-md-center justify-content-end">
                <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">Продажа и установка кондиционеров!</h1>
                    <div class="intro-text text-center text-md-left">
                        <p class="mb-4">Работаем в Барановичах, Столбцах, Ивацевичах, Ганцевичах, Слониме, Новогрудке и
                            в других населённых пунктах в пределах 70 КМ от Барановичей! </p>
                        <div class="p-1">
                            <div class="m-1">
                                <a href="tel:375297230016" class="m-1">
                                    <div class="btn btn-sm btn-primary">
                                        <h6>MTS<span>+375 (29) 723-00-16</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="m-1">
                                <a href="tel:375299400287" class="m-1">
                                    <div class="btn btn-sm btn-primary">
                                        <h6>A1&nbsp;<span>+375 (29) 940-02-87</span></h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-truck"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Низкие цены</h2>
                        <p>Наши цены - самые низкие в Барановичам и регионах. Подберём лучший вариант с учётом вашего бюджета.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-refresh2"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Оперативность</h2>
                        <p>Оперативно подберём для вас лучший кондиционер и запланируем удобную дату для установки.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-help"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Проверенная техника</h2>
                        <p>Мы рекомендуем только ту технику, которая хорошо зарекомендовала себя за долгие годы.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Фирмы с которыми мы работаем</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('website/images/mtbsh.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>Mitsubishi Electric</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('website/images/hisense.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>Hisense</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('website/images/gree.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>Gree</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('website/images/daikn.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>Daikin</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('website/images/cooper.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>Kuper Hunter</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('website/images/lg.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>LG</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

@endsection
