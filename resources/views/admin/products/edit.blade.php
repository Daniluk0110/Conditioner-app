@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование кондиционера</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-4">
                        <form action="/admin/products/{{ $product->id }}" method="POST">
                            @CSRF
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>ID: </label>
                                    <label>{{ $product->id }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Название</label>
                                    <input name="name" type="text" class="form-control"
                                           value="{{ $product->name }}" placeholder="Введите название">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <textarea name="description" class="form-control" cols="30"
                                              rows="10">{{ $product->description }}</textarea>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" value="Обновить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
