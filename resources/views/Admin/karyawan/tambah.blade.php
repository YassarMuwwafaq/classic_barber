@extends('admin.layout.app')
@section('title', 'Tambah')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Karyawan</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Barber</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="barber_id">
                                @foreach ($barbers as $barber)
                                    <option value="{{ $barber->id }}">{{ $barber->nama }}</option>
                                @endforeach
                            </select>
                            @error('barber_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputName1"
                                placeholder="Nama">
                            @error('nama')
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
                        <a href="{{ route('karyawan.index') }}" class="btn btn-dark">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
