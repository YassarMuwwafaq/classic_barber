@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-3 text-white">Silahkan Konfirmasi</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="cabang-konfirmasi">
            <h4><b>Classic Barbers</b></h4>
            <br>
            <form action="">
                <div class="detail-customer">
                    <p><b>Customer :</b> Rifki Iskandar</p>
                    <p><b>Hari :</b> Senin, 1 Juni 2024</p>
                </div>
                <input type="number" id="" class="form-control" placeholder="Masukkan No. HP">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Layanan</th>
                            <th scope="col">Hair Artist</th>
                            <th scope="col">Cabang</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>HairCut</td>
                            <td>Daus</td>
                            <td>Vol.Sunan Giri</td>
                            <td>09.00</td>
                            <td>Rp. 60.000</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="konfirmasi">
                    <p>Total : <b>Rp. 60.000</b></p>
                    <button class="btn-konfirmasi">Konfirmasi</button>
                </div>
            </form>
        </div>

    </div>
    {{-- panah undo --}}
    <div class="btn-panah">
        <a href="{{ route('bookingbarber') }}"><img src="{{ asset('assets/panah-undo.svg') }}" alt=""></a>
    </div>
@endsection
