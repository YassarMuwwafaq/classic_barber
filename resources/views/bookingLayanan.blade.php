@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-3 text-white">Silahkan pilih service</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="cabang-layanan">
            @foreach ($layanans as $layanan)
                <div class="card-layanan">
                    <img src="{{ asset('storage/' . $layanan->foto) }}" alt="">
                    <h5 class="pt-3">{{ $layanan->nama }}</h5>
                    <p>{{ $layanan->deskripsi }}</p>
                </div>
            @endforeach
        </div>
        {{-- panah undo --}}
        <div class="btn-panah">
            <a href="{{ route('bookingbarber') }}"><img src="{{ asset('assets/panah-undo.svg') }}" alt=""></a>
        </div>
    </div>
@endsection
