@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-4 text-white">Silahkan pilih cabang</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="cabang">
            {{-- card-1 --}}
            <div class="card">
                <img src="{{ asset('assets/componentCabang/cabangBarber.png') }}" alt="">
                <h5 class="pt-3">Vol 1 Sunan Giri</h5>
                <button>Pilih</button>
            </div>
            {{-- card-2 --}}
            <div class="card">
                <img src="{{ asset('assets/componentCabang/cabangBarber.png') }}" alt="">
                <h5 class="pt-3">Vol 1 Sunan Giri</h5>
                <button>Pilih</button>
            </div>
            {{-- card-3 --}}<div class="card">
                <img src="{{ asset('assets/componentCabang/cabangBarber.png') }}" alt="">
                <h5 class="pt-3">Vol 1 Sunan Giri</h5>
                <button>Pilih</button>
            </div>
            {{-- card-4 --}}
            <div class="card">
                <img src="{{ asset('assets/componentCabang/cabangBarber.png') }}" alt="">
                <h5 class="pt-3">Vol 1 Sunan Giri</h5>
                <button>Pilih</button>
            </div>
        </div>
    </div>
@endsection
