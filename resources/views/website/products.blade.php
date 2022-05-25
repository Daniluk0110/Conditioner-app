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
        </div>

    </div>
</div>
@endsection
