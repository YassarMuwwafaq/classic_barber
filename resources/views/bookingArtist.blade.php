@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-3 text-white">Silahkan pilih Hair Artist</h4>
        <div class="cabang-artis">
            @foreach ($karyawans as $karyawan)
                <div class="card-artis">
                    <img src="{{ asset('storage/' . $karyawan->foto) }}" alt="{{ $karyawan->nama }}">
                    <h5>{{ $karyawan->nama }}</h5>
                    <p>Rp
                        {{ number_format($karyawan->layanans->where('id', $layanan->id)->first()->pivot->harga, 0, ',', '.') }}
                    </p>
                </div>
            @endforeach
        </div>
        {{-- panah undo --}}
        <div class="btn-panah">
            <a href="{{ route('pilihlayanan', ['barber_id' => $barber->id]) }}"><img
                    src="{{ asset('assets/panah-undo.svg') }}" alt=""></a>
        </div>
    </div>
@endsection
