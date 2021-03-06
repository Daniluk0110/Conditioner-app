@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование свойства для кондиционеров</h1>
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
                        <form action="/admin/properties/{{ $property->id }}" method="POST">
                            @CSRF
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>ID: </label>
                                    <label>{{ $property->id }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Название свойства</label>
                                    <input name="name" type="text" class="form-control"
                                           value="{{ $property->name }}" placeholder="Введите название">
                                    @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Символьный код</label>
                                    <input name="slag" type="text" class="form-control"
                                           value="{{ $property->slag }}" placeholder="Введите код">
                                    @error('slag')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Сортировка</label>
                                    <input name="sort" type="text" class="form-control"
                                           value="{{ $property->sort }}" placeholder="Введите сортировку">
                                    @error('sort')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Тег</label>
                                    <input name="tag" type="text" class="form-control"
                                           value="{{ $property->tag }}" placeholder="Введите имя тега">
                                    @error('tag')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Описание свойства</label>
                                    <textarea id="summernote" name="description">{{ $property->description }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" value="Обновить">
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
