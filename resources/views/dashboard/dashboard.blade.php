@extends('dashboard.layouts.app')

@section('content')
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        {{-- <x-box caption="Divisi" total="10+" bg="bg-info" icon="ion-bag" url="{{ route('divisi.index') }}"/>
                        <x-box caption="Pengajuan Cuti" total="100+" bg="bg-success" icon="ion-stats-bars" url="{{ route('pengajuanCuti.index') }}"/>
                        <x-box caption="Pegawai" total="150+" bg="bg-warning" icon="ion-person-add" url="{{ route('pegawai') }}"/>
                        <x-box caption="Jatah Cuti" total="150+" bg="bg-danger" icon="ion-pie-graph" url="{{ route('jatahCuti.index') }}"/>
                        <x-box caption="User Login" total="150+" bg="bg-warning" icon="ion-person-add" url="{{ route('user.index') }}"/> --}}
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
@endsection