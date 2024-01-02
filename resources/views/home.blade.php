@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ __('Halo, Selamat Datang!') }}</h5>
                            <p class="card-text">
                                Selamat datang di halaman dashboard. Ini adalah tempat untuk mengelola semua informasi Anda.
                            </p>
                            <img src="{{ asset('images/Foto.jpeg') }}" alt="Image" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
