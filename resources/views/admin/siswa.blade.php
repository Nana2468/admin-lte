@extends('layout.template')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Siswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <th>NO</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>006787654323456</td>
                                    <td>Mutia</td>
                                    <td>RPL</td>
                                    <td><button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-warning">Warning</button>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
