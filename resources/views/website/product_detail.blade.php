@extends('website.layouts.main')

@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="/">Главная</a> <span class="mx-2 mb-0">/</span> <a
                        href="/products">Кондиционеры</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">{{ $product->name }}</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $product->preview_image) }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="text-black">{{ $product->name }}</h2>
                    <p><strong class="text-primary h4">{{ $product->rubel_price }} BYN</strong></p>
                    <br>
                    {!! $product->description !!}

                    <p><a href="tel:375299400287" class="buy-now btn btn-sm btn-primary">A1
                            <span>+375 (29) 940-02-87</span></a></p>
                    <p><a href="tel:375297230016" class="buy-now btn btn-sm btn-primary">MTS
                            <span>+375 (29) 723-00-16</span></a></p>

                </div>
            </div>
            <div class="row mt-4">
                @include('website.includes.product_detail_properties_table')
            </div>
        </div>
    </div>
@endsection
