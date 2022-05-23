@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex ml-2">
                        <h1 class="m-0">Детальная информация о кондиционере</h1>
                        <a class="p-2" href="/admin/products/{{ $product->id }}/edit">
                            <i class="fas fa-pen"></i>
                        </a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Компания</td>
                                        <td>{{ $product->company }}</td>
                                    </tr>
                                    <tr>
                                        <td>Цена</td>
                                        <td>{{ $product->usd_price }}$</td>
                                    </tr>
                                    <tr>
                                        <td>Наличие</td>
                                        <td>{{ $product->stock }}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание</td>
                                        <td>{!! $product->description !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Картинка</td>
                                        <td><img class="img-fluid img"
                                                 src="{{ asset('storage/' . $product->preview_image) }}" alt=""></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td><span>Свойства:</span></td>
                                    </tr>
                                    @foreach($properties as $property)
                                        <tr>
                                            <td>{{ $property->name }}</td>
                                            <td>{{ $property->value }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
