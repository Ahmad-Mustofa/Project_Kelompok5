@extends('dashboard.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit user</h1>
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
                                <a href="{{ route('user.index') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                <form action="{{ route('user.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4">Nama</label>
                                        <input type="hidden" name="id" value="{{ $users->id }}">
                                        <input type="text" value="{{ $users->name }}" name="name" id="name" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Email" class="col-md-4">Email</label>
                                        <input type="hidden" name="id" value="{{ $users->id }}">
                                        <input type="text" value="{{ $users->email }}" name="email" id="email" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4">Password</label>
                                        <input type="text" value="{{ $users->password }}" name="password" id="password" class="form-control col-md-8" required>
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