@extends('Admin.layout.app')
@section('title', 'Barber')
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
                    <h4 class="card-title">Booking</h4>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center"> Nama </th>
                                    <th style="text-align: center"> Telepon </th>
                                    <th style="text-align: center"> Barber </th>
                                    <th style="text-align: center"> Layanan </th>
                                    <th style="text-align: center"> Hair Artist </th>
                                    <th style="text-align: center"> Harga </th>
                                    <th style="text-align: center"> Tanggal </th>
                                    <th style="text-align: center"> Waktu </th>
                                    <th style="text-align: center"> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $row)
                                    <tr>
                                        <td style="text-align: center"> {{ $row->nama }} </td>
                                        <td style="text-align: center"> {{ $row->telepon }}</td>
                                        <td style="text-align: center"> {{ $row->barber }} </td>
                                        <td style="text-align: center"> {{ $row->layanan }} </td>
                                        <td style="text-align: center"> {{ $row->hair_artist }} </td>
                                        <td style="text-align: center"> {{ $row->harga }} </td>
                                        <td style="text-align: center"> {{ $row->tanggal }} </td>
                                        <td style="text-align: center"> {{ $row->waktu }} </td>
                                        <td style="text-align: center">
                                            <div class="badge badge-outline-success">Dibayar</div>
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
            $('#datatable').DataTable({
                responsive: true // Menambahkan opsi responsif
            });
        });
    </script>
@endsection