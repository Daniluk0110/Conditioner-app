@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление нового свойства</h1>
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
                    <form action="#">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Название свойства</label>
                                <input name="name" type="text" class="form-control" placeholder="Введите название">
                            </div>
                            <div class="form-group">
                                <label>Описание свойства</label>
                                <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/admin/properties/create" type="submit" class="btn btn-primary">Создать</a>
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
