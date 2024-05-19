@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-4 text-white">Silahkan pilih cabang</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="row">
            <!-- card -->
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div>
                        <h5>Potong di Barber</h5>
                    </div>
                    <div class="card-img-top-wrapper">
                        <img src="{{ asset('assets/CabangBarber.jpg') }}" class="card-img-top img-fluid" alt="">
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <a href="#" class="btn">Pilih</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
