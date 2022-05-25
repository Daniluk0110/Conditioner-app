@extends('website.layouts.main')

@section('content')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="/">Главная</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Каталог</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-9 order-2">

                <div class="row mb-5">

                    @foreach($products as $product)
                        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                            <div class="block-4 text-center border">
                                <figure class="block-4-image">
                                    <a href="/products/{{ $product->id }}">
                                        <img src="{{ asset('storage/' . $product->preview_image) }}" alt="Image" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="/products/{{ $product->id }}">{{ $product->name }}</a></h3>
                                    <p class="text-primary font-weight-bold">{{ $product->rubel_price }} BYN</p>
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="col-md-3 order-1 mb-5 mb-md-0">
                <div class="border p-4 rounded mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                        <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                        <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="text-black ml-auto">(2,124)</span></a></li>
                    </ul>
                </div>

                <div class="border p-4 rounded mb-4">
{{--                    <div class="mb-4">--}}
{{--                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>--}}
{{--                        <div id="slider-range" class="border-primary"></div>--}}
{{--                        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />--}}
{{--                    </div>--}}

{{--                    <div class="mb-4">--}}
{{--                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>--}}
{{--                        <label for="s_sm" class="d-flex">--}}
{{--                            <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>--}}
{{--                        </label>--}}
{{--                        <label for="s_md" class="d-flex">--}}
{{--                            <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>--}}
{{--                        </label>--}}
{{--                        <label for="s_lg" class="d-flex">--}}
{{--                            <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>--}}
{{--                        </label>--}}
{{--                    </div>--}}

{{--                    <div class="mb-4">--}}
{{--                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>--}}
{{--                        <a href="#" class="d-flex color-item align-items-center" >--}}
{{--                            <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="d-flex color-item align-items-center" >--}}
{{--                            <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="d-flex color-item align-items-center" >--}}
{{--                            <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="d-flex color-item align-items-center" >--}}
{{--                            <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
