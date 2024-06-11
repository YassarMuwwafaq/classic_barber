@extends('components.templateBooking')

@section('content')
    <div class="section">
        <h4 class="text-center mb-3 text-white">Konfirmasi Booking</h4>
        <div class="cabang-konfirmasi">
            <h4><b>{{ $barber->nama }}</b></h4>
            <br>
            <form id="payment-form" action="{{ route('konfirmasiBooking.store') }}" method="POST">
                @csrf
                @php
                    \Carbon\Carbon::setLocale('id');
                @endphp
                <div>
                    <p style="text-align: right"><b>Hari :</b> {{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('l, j F Y') }}</p>
                </div>
                
                <input type="hidden" name="barber_id" value="{{ $barber->id }}">
                <input type="hidden" name="layanan_id" value="{{ $layanan->id }}">
                <input type="hidden" name="karyawan_id" value="{{ $karyawan->id }}">
                <input type="hidden" name="tanggal" value="{{ $jadwal->tanggal }}">
                <input type="hidden" name="waktu" value="{{ $jadwal->waktu }}">
                <input type="hidden" name="harga" value="{{ $harga }}">

                <label for="customer_name"><b>Customer :</b></label>
                <input type="text" id="customer_name" name="customer_name" class="form-control" value="{{ Auth::user()->name ?? '' }}">
                @if ($errors->has('customer_name'))
                    <div class="text-danger">{{ $errors->first('customer_name') }}</div>
                @endif

                <label for="no_hp"><b>No. HP :</b></label>
                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Masukkan No. HP" required>
                @if ($errors->has('no_hp'))
                    <div class="text-danger">{{ $errors->first('no_hp') }}</div>
                @endif

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
                            <td>{{ $layanan->nama }}</td>
                            <td>{{ $karyawan->nama }}</td>
                            <td>{{ $barber->nama }}</td>
                            <td>{{ $jadwal->waktu }}</td>
                            <td>Rp. {{ number_format($harga, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="konfirmasi">
                    <p>Total : <b>Rp. {{ number_format($harga, 0, ',', '.') }}</b></p>
                    <button type="button" id="pay-button" class="btn-konfirmasi">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
    <div class="btn-panah">
        <a href="{{ route('bookingjadwal', ['barber_id' => $barber->id, 'layanan_id' => $layanan->id, 'karyawan_id' => $karyawan->id]) }}">
            <img src="{{ asset('assets/panah-undo.svg') }}" alt="">
        </a>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function (event) {
            event.preventDefault();
            
            var form = document.getElementById('payment-form');
            var customerName = document.getElementById('customer_name');
            var noHp = document.getElementById('no_hp');
            var valid = true;

            if (customerName.value.trim() === '') {
                alert('Nama harus diisi');
                valid = false;
            }

            if (noHp.value.trim() === '') {
                alert('No. Telepon harus diisi');
                valid = false;
            } else if (!/^\d+$/.test(noHp.value.trim())) {
                alert('No. Telepon harus berupa angka');
                valid = false;
            }

            if (valid) {
                window.snap.pay('{{ $snapToken }}', {
                    onSuccess: function(result){
                        form.submit();
                    },
                    onPending: function(result){
                        alert("Menunggu pembayaran Anda!");
                        console.log(result);
                    },
                    onError: function(result){
                        alert("Pembayaran gagal!");
                        console.log(result);
                    },
                    onClose: function(){
                        alert('Anda menutup jendela tanpa menyelesaikan pembayaran');
                    }
                });
            }
        });
    </script>
@endsection
