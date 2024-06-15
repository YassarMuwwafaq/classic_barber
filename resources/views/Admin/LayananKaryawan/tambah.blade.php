@extends('Admin.layout.app')
@section('title', 'Tambah Layanan Karyawan')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Layanan Karyawan</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('layanankaryawan.store') }}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="barberSelect">Karyawan</label>
                            <select class="form-control" id="karyawan_id" name="karyawan_id">
                                @foreach ($karyawans as $karyawan)
                                    <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                                @endforeach
                            </select>
                            @error('karyawan_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="layananContainer">
                            <div class="form-group layanan-wrapper">
                                <div style="display: flex; align-items: center;">
                                    <label for="layananSelect">Layanan</label>
                                    <select class="form-control mb-2 ml-2" name="layanan_id[]">
                                        @foreach ($layanans as $layanan)
                                            <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('layanan_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            
                                    <!-- Input harga -->
                                    <label for="exampleInputName1" class="ml-3">Harga</label>
                                    <input type="text" class="form-control mb-2 ml-2" name="harga[]" placeholder="Harga">
                                    
                                    @error('harga')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                        <div>
                            <button type="button" class="btn btn-success mb-4" id="addLayanan">Tambah Layanan</button>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                        <a href="{{ route('layanankaryawan.index') }}" class="btn btn-dark">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('addLayanan').addEventListener('click', function() {
            var layananWrapper = document.createElement('div');
            layananWrapper.classList.add('form-group', 'layanan-wrapper');

            var divContainer = document.createElement('div');
            divContainer.style.display = 'flex';
            divContainer.style.alignItems = 'center';

            var labelLayanan = document.createElement('label');
            labelLayanan.textContent = 'Layanan';
            labelLayanan.setAttribute('for', 'layananSelect');
            divContainer.appendChild(labelLayanan);

            var select = document.createElement('select');
            select.classList.add('form-control', 'mb-2', 'ml-2');
            select.name = 'layanan_id[]';

            @foreach ($layanans as $layanan)
                var option = document.createElement('option');
                option.value = '{{ $layanan->id }}';
                option.text = '{{ $layanan->nama }}';
                select.appendChild(option);
            @endforeach

            divContainer.appendChild(select);

            var labelHarga = document.createElement('label');
            labelHarga.textContent = 'Harga';
            labelHarga.setAttribute('for', 'hargaInput');
            labelHarga.style.marginLeft = '10px'; // Tambahkan margin left di sini
            divContainer.appendChild(labelHarga);

            var inputHarga = document.createElement('input');
            inputHarga.type = 'text';
            inputHarga.classList.add('form-control', 'mb-2', 'ml-2');
            inputHarga.name = 'harga[]';
            inputHarga.placeholder = 'Harga';

            divContainer.appendChild(inputHarga);

            layananWrapper.appendChild(divContainer);

            document.getElementById('layananContainer').appendChild(layananWrapper);
        });
    </script>
@endsection