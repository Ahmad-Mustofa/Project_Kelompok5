@extends('dashboard.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit pembayaran</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">user</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <a href="{{ route('pembayaran.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error )
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form action="{{ route('pembayaran.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4">Nama</label>
                                        <input type="hidden" name="id" value="{{ $pembayaran->id }}">
                                        <input type="text" value="{{ $pembayaran->name }}" name="name" id="name" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-md-4">tanggal</label>
                                        <input type="hidden" tanggal="id" value="{{ $pembayaran->id }}">
                                        <input type="text" value="{{ $pembayaran->tanggal }}" tanggal="tanggal" id="tanggal" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_bayar" class="col-md-4">Jumlah Bayar</label>
                                        <input type="hidden" jumlah_bayar="id" value="{{ $pembayaran->id }}">
                                        <input type="text" value="{{ $pembayaran->jumlah_bayar }}" jumlah_bayar="jumlah_bayar" id="jumlah_bayar" class="form-control col-md-8" required>
                                    </div>
                                    
                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="Edit" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection