@extends('dashboard.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Armada</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">armada</li>
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
                                <a href="{{ route('armada.index') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                <form action="{{ route('armada.update', $armada->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="merk" class="col-md-4">Merk</label>
                                        <input type="text" name="merk" value="{{ old('merk') }}" id="merk" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="nopol" class="col-md-4">Nomor Polisi</label>
                                        <input type="text" name="nopol" value="{{ old('nopol') }}" id="nopol" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="thn_beli" class="col-md-4">Tahun Beli</label>
                                        <input type="integer" name="thn_beli" value="{{ old('thn_beli') }}" id="thn_beli" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-md-4">Deskripsi</label>
                                        <input type="text" name="deskripsi" value="{{ old('deskripsi') }}" id="deskripsi" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_kendaraan_id" class="col-md-4">Jenis kendaraan</label>
                                        <select class="form-control select-dropdown col-md-8" name="jenis_kendaraan_id">
                                            @foreach ($jenis_kendaraan as $jenis_kendaraan)
                                            <option value="" hidden>Jenis Kendaraan</option>
                                            <option value="{{ $jenis_kendaraan->id }}" required>{{ $jenis_kendaraan->name }}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kapasitas_kursi" class="col-md-4">Kapasitas Kursi</label>
                                        <input type="text" name="kapasitas_kursi" value="{{ old('kapasitas_kursi') }}" id="kapasitas_kursi" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="rating" class="col-md-4">Rating</label>
                                        <input type="text" name="rating" value="{{ old('rating') }}" id="rating" class="form-control col-md-8">
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