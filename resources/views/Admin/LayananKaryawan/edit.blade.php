@extends('admin.layout.app')
@section('title', 'Edit Layanan Karyawan')

@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Data Layanan Karyawan</h4>
                    <form action="{{ route('layanankaryawan.update', ['layanankaryawan' => $karyawan->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="karyawanSelect">Karyawan</label>
                            <select class="form-control" id="karyawan_id" name="karyawan_id" disabled>
                                <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                            </select>
                        </div>

                        <div id="layananContainer">
                            @foreach ($karyawan->Layanans as $layanan)
                                <div class="form-group layanan-wrapper">
                                    <div style="display: flex; align-items: center;">
                                        <label for="layananSelect">Layanan</label>
                                        <select class="form-control mb-2 ml-2" name="layanan_id[]">
                                            @foreach ($layanans as $optLayanan)
                                                <option value="{{ $optLayanan->id }}" {{ $layanan->id == $optLayanan->id ? 'selected' : '' }}>{{ $optLayanan->nama }}</option>
                                            @endforeach
                                        </select>

                                        <!-- Input harga -->
                                        <label for="exampleInputName1" class="ml-3">Harga</label>
                                        <input type="text" class="form-control mb-2 ml-2" name="harga[]" value="{{ $layanan->pivot->harga }}" placeholder="Harga">
                                        
                                        <!-- Tombol hapus -->
                                        <button type="button" class="btn btn-danger ml-2 remove-layanan">Hapus</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div>
                            <button type="button" class="btn btn-success mb-4" id="addLayanan">Tambah Layanan</button>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
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
            labelHarga.style.marginLeft = '10px';
            divContainer.appendChild(labelHarga);

            var inputHarga = document.createElement('input');
            inputHarga.type = 'text';
            inputHarga.classList.add('form-control', 'mb-2', 'ml-2');
            inputHarga.name = 'harga[]';
            inputHarga.placeholder = 'Harga';

            divContainer.appendChild(inputHarga);

            var removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.classList.add('btn', 'btn-danger', 'ml-2', 'remove-layanan');
            removeButton.textContent = 'Hapus';
            divContainer.appendChild(removeButton);

            layananWrapper.appendChild(divContainer);

            document.getElementById('layananContainer').appendChild(layananWrapper);
        });

        // Fungsi untuk menghapus div layanan-wrapper
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-layanan')) {
                event.target.closest('.layanan-wrapper').remove();
            }
        });
    </script>
@endsection
