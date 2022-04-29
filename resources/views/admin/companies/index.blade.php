@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Companies</h1>
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
                        <a href="/admin/companies/create" class="btn btn-block btn-primary">Add new company</a>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            <br class="mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Список компаний</h3>
                    </div>
                    <!-- /.card-header -->
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
                                            <th class="sorting">
                                                Описание
                                            </th>
                                            <th class="sorting">
                                                Последнее обновление
                                            </th>
                                            <th class="sorting">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($companies as $company)
                                            <tr class="odd">
                                                <td>{{ $company->id }}</td>
                                                <td>{{ $company->name }}</td>
                                                <td>{{ $company->description }}</td>
                                                <td>{{ $company->updated_at }}</td>
                                                <td>
                                                    <a class="p-2" href="/admin/companies/{{ $company->id }}/edit">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <a class="p-2" href="/admin/companies/{{ $company->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a class="p-2" href="/admin/companies/{{ $company->id }}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
