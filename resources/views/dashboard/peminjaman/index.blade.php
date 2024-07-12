@extends('dashboard.layouts.app')

@section('content') 
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Peminjaman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Kendaraan</li>
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
                            <div class="card-header">
                                <h3 class="card-title">Data Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('peminjaman.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Peminjam</th>
                                            <th>KTP Peminjam</th>
                                            <th>Keperluan Pinjam</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                            <th>Biaya</th>
                                            <th>Armada</th>
                                            <th>Komentar Peminjam</th>
                                            <th>Status Pinjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjaman as $peminjaman)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $peminjaman->nama_peminjam }}</td>
                                                <td>{{ $peminjaman->ktp_peminjam }}</td>
                                                <td>{{ $peminjaman->keperluan_pinjam }}</td>
                                                <td>{{ $peminjaman->mulai }}</td>
                                                <td>{{ $peminjaman->selesai }}</td>
                                                <td>{{ $peminjaman->biaya }}</td>
                                                <td>{{ $peminjaman->armada_id }}</td>
                                                <td>{{ $peminjaman->komentar_peminjam }}</td>
                                                <td>{{ $peminjaman->status_pinjam }}</td>
                                                <td class="d-flex"><a type="button" href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-primary mr-4">Edit</a>
                                                    <form action="{{ route('peminjaman.delete', $peminjaman->id) }}" method="post" onsubmit="return confirm('yakin ingin dihapus?')">
                                                       @csrf
                                                       @method('delete')
                                                       <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                 </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                   
                                </table>
                                {{-- {{ $jenis_kendaraan->onEachSide(3)->links() }} --}}
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

@push('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
@push('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endpush
