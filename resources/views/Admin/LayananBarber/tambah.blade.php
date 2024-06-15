@extends('Admin.layout.app')
@section('title', 'Tambah Layanan barber')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Layanan Barber</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('layananbarber.store') }}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="barberSelect">Barber</label>
                            <select class="form-control" id="barber_id" name="barber_id">
                                @foreach ($barbers as $barber)
                                    <option value="{{ $barber->id }}">{{ $barber->nama }}</option>
                                @endforeach
                            </select>
                            @error('barber_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group" id="layananContainer">
                            <label for="layananSelect">Layanan</label>
                            <div class="layanan-wrapper">
                                <select class="form-control mb-2" name="layanan_id[]">
                                    @foreach ($layanans as $layanan)
                                        <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                                    @endforeach
                                </select>
                                @error('layanan_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
            layananWrapper.classList.add('layanan-wrapper');
            
            var select = document.createElement('select');
            select.classList.add('form-control', 'mb-2');
            select.name = 'layanan_id[]';

            @foreach ($layanans as $layanan)
                var option = document.createElement('option');
                option.value = '{{ $layanan->id }}';
                option.text = '{{ $layanan->nama }}';
                select.appendChild(option);
            @endforeach

            layananWrapper.appendChild(select);
            document.getElementById('layananContainer').appendChild(layananWrapper);
        });
    </script>
@endsection
