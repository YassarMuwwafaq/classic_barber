@extends('admin.layout.app')
@section('title', 'dashboard')
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <div class="d-flex align-items-center">
                            <h4 class="text-center mb-0 mr-2">BARBER</h4>
                            <i class="icon-lg mdi mdi-home text-primary"></i>
                        </div>
                        <div class="row w-100 mt-3">
                            <div class="col-12 text-center">
                                <h1 class="mb-0 count-animation" data-count="{{ $barberCount }}">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <div class="d-flex align-items-center">
                            <h4 class="text-center mb-0 mr-2">LAYANAN</h4>
                            <i class="icon-lg mdi mdi mdi-scissors-cutting text-danger"></i>
                        </div>
                        <div class="row w-100 mt-3">
                            <div class="col-12 text-center">
                                <h1 class="mb-0 count-animation" data-count="{{ $layananCount }}">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <div class="d-flex align-items-center">
                            <h4 class="text-center mb-0 mr-2">KARYAWAN</h4>
                            <i class="icon-lg mdi mdi-account-multiple text-success"></i>
                        </div>
                        <div class="row w-100 mt-3">
                            <div class="col-12 text-center">
                                <h1 class="mb-0 count-animation" data-count="{{ $karyawanCount }}">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.count-animation').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.attr('data-count') }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
        });
    </script>
@endsection