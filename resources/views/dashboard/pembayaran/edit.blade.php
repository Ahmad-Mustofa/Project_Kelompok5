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
                                        <label for="tanggal" class="col-md-4">Tanggal</label>
                                        <input type="date" name="tanggal" value="{{ old('tanggal') }}" id="tanggal" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_bayar" class="col-md-4">Jumlah Bayar</label>
                                        <input type="text" name="jumlah_bayar" value="{{ old('jumlah_bayar') }}" id="jumlah_bayar" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="peminjaman_id" class="col-md-4">Peminjaman</label>
                                        <select class="form-control select-dropdown col-md-8" name="peminjaman_id">
                                            @foreach ($peminjaman as $peminjaman)
                                            <option value="" hidden>Peminjaman</option>
                                            <option value="{{ $peminjaman->id }}" required>{{ $peminjaman->biaya }}</option>
                                            @endforeach
                                          </select>
                                    
                                    
                                    
                                    
                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="Tambah" class="btn btn-primary">
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