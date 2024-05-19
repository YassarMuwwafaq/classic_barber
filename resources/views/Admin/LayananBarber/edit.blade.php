@extends('admin.layout.app')
@section('title', 'Edit Layanan Barber')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Layanan Barber</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('layananbarber.update', $barber->id) }}" method="POST" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="barberSelect">Barber</label>
                            <input type="text" class="form-control" id="barber_name" name="barber_name" value="{{ $barber->nama }}" readonly style="background: #2A3038;">
                        </div>
                        <div class="form-group" id="layananContainer">
                            <label for="layananSelect">Layanan</label>
                            @foreach ($selectedLayanans as $selectedLayanan)
                                <div class="layanan-wrapper d-flex align-items-center mb-2">
                                    <select class="form-control mr-2" name="layanan_id[]">
                                        @foreach ($layanans as $layanan)
                                            <option value="{{ $layanan->id }}" {{ $selectedLayanan == $layanan->id ? 'selected' : '' }}>
                                                {{ $layanan->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button type="button" class="btn btn-danger remove-layanan">Hapus</button>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            <button type="button" class="btn btn-success mb-4" id="addLayanan">Tambah Layanan</button>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                        <a href="{{ route('layananbarber.index') }}" class="btn btn-dark">Batal</a>
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
            layananWrapper.classList.add('layanan-wrapper', 'd-flex', 'align-items-center', 'mb-2');
            
            var select = document.createElement('select');
            select.classList.add('form-control', 'mr-2');
            select.name = 'layanan_id[]';

            @foreach ($layanans as $layanan)
                var option = document.createElement('option');
                option.value = '{{ $layanan->id }}';
                option.text = '{{ $layanan->nama }}';
                select.appendChild(option);
            @endforeach

            var removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.classList.add('btn', 'btn-danger', 'remove-layanan');
            removeButton.textContent = 'Hapus';

            removeButton.addEventListener('click', function() {
                layananWrapper.remove();
            });

            layananWrapper.appendChild(select);
            layananWrapper.appendChild(removeButton);
            document.getElementById('layananContainer').appendChild(layananWrapper);
        });

        document.querySelectorAll('.remove-layanan').forEach(function(button) {
            button.addEventListener('click', function() {
                this.closest('.layanan-wrapper').remove();
            });
        });
    </script>
@endsection
