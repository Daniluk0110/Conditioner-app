@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Кондиционеры</h1>
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
                    <div class="col-4">
                        <a href="/admin/products/create" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>

            </div>
            <br class="mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Список кондиционеров</h3>
                    </div>

                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-hover dataTable dtr-inline"
                                           aria-describedby="example2_info">
                                        <thead>
                                        <tr>
                                            <th class="sorting sorting_asc">
                                                id
                                            </th>
                                            <th class="sorting sorting_asc">
                                                Название
                                            </th>
                                            <th class="sorting sorting_asc">
                                                Цена
                                            </th>
                                            <th class="sorting sorting_asc">
                                                Картинка
                                            </th>
                                            <th class="sorting">
                                                Описание
                                            </th>
                                            <th class="sorting">
                                                Последнее обновление
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr class="odd">
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->usd_price }}</td>
                                                <td><img class="img-fluid img" src="{{ public_path($product->preview_image) }}" alt=""></td>
                                                <td>{!! $product->description !!}</td>
                                                <td>{{ $product->updated_at }}</td>
                                                <td>
                                                    <a class="p-2" href="/admin/products/{{ $product->id }}/edit">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="p-2" href="/admin/products/{{ $product->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="/admin/products/{{ $product->id }}" method="POST">
                                                        @CSRF
                                                        @method('DELETE')
                                                        <button type="submit" class="border-0 bg-white">
                                                            <i class="fas fa-trash text-danger" role="button"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
