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
                                        <label for="nama_peminjam" class="col-md-4">Nama Peminjam</label>
                                        <input type="text" name="nama_peminjam" value="{{ old('nama_peminjam') }}" id="nama_peminjam" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="ktp_peminjam" class="col-md-4">KTP Peminjam</label>
                                        <input type="text" name="ktp_peminjam" value="{{ old('ktp_peminjam') }}" id="ktp_peminjam" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="keperluan_pinjam" class="col-md-4">Keperluan Pinjam</label>
                                        <input type="text" name="keperluan_pinjam" value="{{ old('keperluan_pinjam') }}" id="keperluan_pinjam" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="mulai" class="col-md-4">Mulai</label>
                                        <input type="date" name="mulai" value="{{ old('mulai') }}" id="mulai" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="selesai" class="col-md-4">Selesai</label>
                                        <input type="date" name="selesai" value="{{ old('selesai') }}" id="selesai" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="biaya" class="col-md-4">Biaya</label>
                                        <input type="text" name="biaya" value="{{ old("biaya") }}" id="biaya" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="armada_id" class="col-md-4">Armada</label>
                                        <select class="form-control select-dropdown col-md-8" name="armada_id">
                                            @foreach ($armada as $armada)
                                            <option value="" hidden>Jenis Kendaraan</option>
                                            <option value="{{ $armada->id }}" required>{{ $armada->merk }}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="komentar_peminjam" class="col-md-4">Komentar Peminjam</label>
                                        <input type="text" name="komentar_peminjam" value="{{ old('komentar_peminjam') }}" id="komentar_peminjam" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="status_pinjam" class="col-md-4">Status Pinjam</label>
                                        <input type="text" name="status_pinjam" value="{{ old('status_pinjam') }}" id="status_pinjam" class="form-control col-md-8">
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
