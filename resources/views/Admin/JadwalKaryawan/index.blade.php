@extends('admin.layout.app')
@section('title', 'jadwal karyawan')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap4.css" />
    <style>
        option {
            background-color: #12151e
        }
    </style>

@endsection
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Tabel Jadwal Karyawan</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <a href="{{ route('jadwalkaryawan.create') }}" class="btn btn-primary"><i
                                    class="mdi mdi-plus"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center"> Tanggal </th>
                                    <th style="text-align: center"> Karyawan </th>
                                    <th style="text-align: center"> Barber </th>
                                    <th style="text-align: center"> Waktu Mulai </th>
                                    <th style="text-align: center"> Waktu Selesai </th>
                                    <th style="text-align: center"> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwalKaryawan as $row)
                                    <tr>
                                        <td style="text-align: center">{{ $row->tanggal }}</td>
                                        <td style="text-align: center"> {{ $row->karyawan->nama }} </td>
                                        <td style="text-align: center"> {{ $row->karyawan->barber->nama }} </td>
                                        <td style="text-align: center"> {{ $row->waktu_mulai }} </td>
                                        <td style="text-align: center"> {{ $row->waktu_selesai }} </td>
                                        <td style="text-align: center">
                                            <a href="{{ route('jadwalkaryawan.edit', $row->id) }}"
                                                class="btn btn-warning btn-icon-text">
                                                <i class="mdi mdi-pencil btn-icon-prepend"></i>Edit
                                            </a>
                                            <form class="d-inline" action="{{ route('jadwalkaryawan.destroy') }}"
                                                method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus jadwal karyawan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="mdi mdi-delete btn-icon-prepend"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection