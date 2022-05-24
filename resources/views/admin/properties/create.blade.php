@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление нового свойства для кондиционеров</h1>
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
                    <form action="/admin/properties" method="POST">
                        @CSRF
                        <div class="card-body">
                            <div class="form-group">
                                <label>Название свойства</label>
                                <input name="name" type="text" class="form-control" placeholder="Введите название" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Символьный код</label>
                                <input name="slag" type="text" class="form-control" placeholder="Введите символьный код" value="{{ old('slag') }}">
                                @error('slag')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Сортировка</label>
                                <input name="sort" type="text" class="form-control" placeholder="Введите символьный код" value="{{ old('sort') ? old('sort') : 500 }}">
                                @error('sort')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Описание свойства</label>
                                <textarea id="summernote" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Создать">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
