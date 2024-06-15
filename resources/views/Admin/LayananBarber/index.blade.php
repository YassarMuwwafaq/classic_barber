@extends('Admin.layout.app')
@section('title', 'Layanan Barber')
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
                    <h4 class="card-title mb-4">Tabel Layanan Barber</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <a href="{{ route('layananbarber.create') }}" class="btn btn-primary"><i
                                    class="mdi mdi-plus"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center"> Nomor </th>
                                    <th style="text-align: center"> Barber </th>
                                    <th style="text-align: center"> Layanan </th>
                                    <th style="text-align: center"> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barbers as $row)
                                    <tr>
                                        <td style="text-align: center"> {{ $loop->iteration }} </td>
                                        <td style="text-align: center">{{ $row['nama_barber'] }}</td>
                                        <td style="text-align: left">
                                            <ul>
                                                @foreach ($row['layanans'] as $layanan)
                                                <li>{{ $layanan}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td style="text-align: center">
                                            <a href="{{ route('layananbarber.edit', $row['barber_id']) }}"
                                                class="btn btn-warning btn-icon-text">
                                                <i class="mdi mdi-pencil btn-icon-prepend"></i>Edit
                                            </a>
                                            <form class="d-inline" action="{{ route('layananbarber.destroy') }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="barber_id" value="{{ $row['barber_id']}}">
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
