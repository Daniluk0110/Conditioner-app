@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление нового кондиционера</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->


                <form action="/admin/products" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="form-group">
                            <label>Название кондиционера</label>
                            <input name="name" type="text" class="form-control" value="{{ old('name') }}"
                                   placeholder="Введите название" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Компания</label>
                                    <select name="company_id" class="form-control" required>
                                        <option>Выберите компанию:</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('company')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Загрузка превью изображения</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input required type="file" class="custom-file-input" name="preview_image">
                                            <label class="custom-file-label">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузить</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea id="summernote" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Свойства кондиционера</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">id</th>
                                        <th>Название</th>
                                        <th>Значение</th>
                                        <th>Числовое значение</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($properties as $property)
                                        <tr>
                                            <td>{{ $property->id }}</td>
                                            <td>{{ $property->name }}</td>
                                            <td>
                                                <input type="text"
                                                       value="{{old('property_text_id[' . $property->id . ']')}}"
                                                       name="property_text_id[{{ $property->id }}]">
                                            </td>
                                            <td>
                                                <input type="text"
                                                       value="{{old('property_float_id[' . $property->id . ']')}}"
                                                       name="property_float_id[{{ $property->id }}]">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Создать">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
