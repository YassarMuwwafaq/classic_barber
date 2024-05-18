@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-4 text-white">Silahkan pilih cabang</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="cabang">
            @foreach ($barbers as $barber)
            <!-- card -->
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/'.$barber->foto) }}" class="card-img-top" alt="{{ $barber->nama }}" style="width: 100%; max-height: 200px;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h5>{{ $barber->nama }}</h5>
                        <p class="card-text text-white mb-3">{{ $barber->alamat }}</p>
                    </div>
                    <a href="{{ route('bookinglayanan', ['barber_id' => $barber->id]) }}" class="btn">Pilih</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
