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
                                        <label for="merk" class="col-md-4">Nama</label>
                                        <input type="hidden" name="id" value="{{ $armada->id }}">
                                        <input type="text" value="{{ $armada->merk }}" name="merk" id="merk" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nopol" class="col-md-4">nopol</label>
                                        <input type="text" value="{{ $armada->nopol }}" name="nopol" id="nopol" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="thn_beli" class="col-md-4">Tahun</label>
                                        <input type="text" value="{{ $armada->thn_beli }}" name="thn_beli" id="thn_beli" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-md-4">Deskripsi</label>
                                        <input type="text" value="{{ $armada->deskripsi }}" name="deskripsi" id="deskripsi" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                            <label for="text" class="col-md-4">Jenis Kendaraan</label>
                                            <select name="jenis_kendaraan_id" id="jenis_kendaraan_id" class="form-control col-md-8">
                                                <option value="" hidden>Pilih Jenis</option>
                                                @foreach ($jenis_kendaraan as $jenis)
                                                    <option value="{{ $jenis->id }}">{{ $jenis->name }}</option> <!-- Add the display value here -->
                                                @endforeach
                                            </select>
                                        </div>
                                    <div class="form-group row">
                                        <label for="kapasitas_kursi" class="col-md-4">Kapasitas</label>
                                        <input type="text" value="{{ $armada->kapasitas_kursi }}" name="kapasitas_kursi" id="kapasitas_kursi" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rating" class="col-md-4">Kapasitas</label>
                                        <input type="text" value="{{ $armada->rating }}" name="rating" id="rating" class="form-control col-md-8" required>
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