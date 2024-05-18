@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <div class="cabang-artisDetail">
            {{-- card-1 --}}
            <div class="card-artisDetail">
                <img src="{{ asset('assets/componentHairArtis/hairArtis1.svg') }}" alt="">
                <h5>NAMA HAIR ARTIS</h5>
                <p>Vol Cabang Barber</p>
                <button class="btn-booking">BOOK NOW</button>
            </div>
            {{-- card-2 --}}
            <div class="banner-comment">
                <div class="comment">Wah gilak siih gacor bet abang ini cerita nya Wah gilak siih gacor bet abang ini
                    cerita nya</div>
                <div class="comment">Wah gilak siih gacor bet abang ini cerita nya Wah gilak siih gacor bet abang ini
                    cerita nya</div>
                <div class="comment">Wah gilak siih gacor bet abang ini cerita nya Wah gilak siih gacor bet abang ini
                    cerita nya</div>
                <div class="comment">Wah gilak siih gacor bet abang ini cerita nya Wah gilak siih gacor bet abang ini
                    cerita nya</div>
                <div class="comment">Wah gilak siih gacor bet abang ini cerita nya Wah gilak siih gacor bet abang ini
                    cerita nya</div>
                <div class="comment">Wah gilak siih gacor bet abang ini cerita nya Wah gilak siih gacor bet abang ini
                    cerita nya</div>
                <div class="comment">Wah gilak siih gacor bet abang ini cerita nya Wah gilak siih gacor bet abang ini
                    cerita nya</div>
                <div class="comment">Wah gilak siih gacor bet abang ini cerita nya Wah gilak siih gacor bet abang ini
                    cerita nya</div>
            </div>
        </div>
        {{-- panah undo --}}
        <div class="btn-panah">
            <a href="{{ route('bookingartist') }}"><img src="{{ asset('assets/panah-undo.svg') }}" alt=""></a>
        </div>
    </div>
@endsection
