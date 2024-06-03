@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-4 text-white">Silahkan pilih cabang</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="row">
            @foreach ($barbers as $barber)
                <!-- card -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('storage/' . $barber->foto) }}" class="card-img-top img-fluid"
                                alt="{{ $barber->nama }}">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5>{{ $barber->nama }}</h5>
                                <p class="card-text text-white mb-3">{{ $barber->alamat }}</p>
                            </div>
                            <a href="{{ route('pilihlayanan', ['barber_id' => $barber->id]) }}" class="btn">Pilih</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
