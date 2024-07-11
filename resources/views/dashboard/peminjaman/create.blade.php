@extends('dashboard.layouts.app')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">kendaraan</li>
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
                                <a href="{{ route('peminjaman.index') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                <form action="{{ route('peminjaman.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4">Nama Peminjam</label>
                                        <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="ktp_peminjam" class="col-md-4">KTP Peminjam</label>
                                        <input type="text" ktp_peminjam="ktp_peminjam" value="{{ old('ktp_peminjam') }}" id="ktp_peminjam" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="keperluan_pinjam" class="col-md-4">Keperluan Pinjam</label>
                                        <input type="text" keperluan_pinjam="keperluan_pinjam" value="{{ old('keperluan_pinjam') }}" id="keperluan_pinjam" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="mulai" class="col-md-4">Mulai</label>
                                        <input type="date" mulai="mulai" value="{{ old('mulai') }}" id="mulai" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="selesai" class="col-md-4">Selesai</label>
                                        <input type="date" selesai="selesai" value="{{ old('selesai') }}" id="selesai" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="biaya" class="col-md-4">Biaya</label>
                                        <input type="text" biaya="biaya" value="{{ old('biaya') }}" id="biaya" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="komentar" class="col-md-4">Komentar Peminjam</label>
                                        <input type="text" komentar="komentar" value="{{ old('komentar') }}" id="komentar" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-md-4">Status Pinjam</label>
                                        <input type="text" status="status" value="{{ old('status') }}" id="status" class="form-control col-md-8">
                                    </div>
                                    
                                    
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
