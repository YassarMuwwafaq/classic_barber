@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-3 text-white">Silahkan pilih service</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="cabang-layanan">
            {{-- card-1 --}}
            <div class="card-layanan">
                <img src="{{ asset('assets/componentLayanan/layanan1.png') }}" alt="">
                <h5 class="pt-3">HAIRCUT</h5>
                <p>Layanan Potong Rambut Dengan Berbagai Model Sudah Termasuk Keramas</p>
                <h5>PRICE : 50K - 60K</h5>
            </div>
            {{-- card-2 --}}
            <div class="card-layanan">
                <img src="{{ asset('assets/componentLayanan/layanan2.png') }}" alt="">
                <h5 class="pt-3">COLORING</h5>
                <p>Layanan Pewarnaan Rambut Semua Warna</p>
                <h5>PRICE : 80K - 250K</h5>
            </div>
            {{-- card-3 --}}
            <div class="card-layanan">
                <img src="{{ asset('assets/componentLayanan/layanan3.png') }}" alt="">
                <h5 class="pt-3">HAIR SOLUTION</h5>
                <p>Layanan Masker Rambut dan Creambath</p>
                <h5>PRICE : 50K - 65K</h5>
            </div>
            {{-- card-4 --}}
            <div class="card-layanan">
                <img src="{{ asset('assets/componentLayanan/layanan4.png') }}" alt="">
                <h5 class="pt-3">BEARDCUT</h5>
                <p>Layanan Potong Kumis dan Janggut</p>
                <h5>PRICE : 20K</h5>
            </div>
            {{-- card-5 --}}
            <div class="card-layanan">
                <img src="{{ asset('assets/componentLayanan/layanan5.png') }}" alt="">
                <h5 class="pt-3">PERMING</h5>
                <p>Layanan Pelurus dan Volume Rambut</p>
                <h5>PRICE : 300K - 350K</h5>
            </div>
        </div>
        {{-- panah undo --}}
        <div class="btn-panah">
            <a href="{{ route('bookingbarber') }}"><img src="{{ asset('assets/panah-undo.svg') }}" alt=""></a>
        </div>
    </div>
@endsection
