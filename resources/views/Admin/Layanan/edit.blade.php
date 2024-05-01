@extends('admin.layout.app')
@section('title', 'Edit')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Layanan</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Barber</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="barber_id">
                                @foreach ($barbers as $barber)
                                    <option value="{{ $barber->id }}" {{ $barber->id == $layanan->barber_id ? 'selected' : ''}}>{{ $barber->nama }}</option>
                                @endforeach
                            </select>
                            @error('barber_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputName1"
                                placeholder="Nama" value="{{ $layanan->nama }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Harga</label>
                            <input type="text" class="form-control" name="harga" id="exampleInputName1"
                                placeholder="harga" value="{{ $layanan->harga }}">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto</label>
                            <input type="file" name="foto" class="form-control-file" id="exampleInputFile"
                                aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Pilih file foto untuk diunggah.</small>
                            @error('foto')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                        <a href="{{ route('layanan.index') }}" class="btn btn-dark">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection