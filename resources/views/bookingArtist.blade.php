@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-3 text-white">Silahkan pilih service</h4>
        <div class="cabang-artis">
            {{-- card-1 --}}
            <div class="card-artis">
                <img src="{{ asset('assets/componentHairArtis/hairArtis1.svg') }}" alt="">
                <h5>NAMA HAIR ARTIS</h5>
                <p>Vol Cabang Barber</p>
            </div>
            {{-- card-2 --}}
            <div class="card-artis">
                <img src="{{ asset('assets/componentHairArtis/hairArtis2.svg') }}" alt="">
                <h5>NAMA HAIR ARTIS</h5>
                <p>Vol Cabang Barber</p>
            </div>
            {{-- card-3 --}}
            <div class="card-artis">
                <img src="{{ asset('assets/componentHairArtis/hairArtis3.svg') }}" alt="">
                <h5>NAMA HAIR ARTIS</h5>
                <p>Vol Cabang Barber</p>
            </div>
        </div>
        {{-- panah undo --}}
        <div class="btn-panah">
            <a href="#"><img src="{{ asset('assets/panah-undo.svg') }}" alt=""></a>
        </div>
    </div>
@endsection
