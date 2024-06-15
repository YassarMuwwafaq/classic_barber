@extends('Admin.layout.app')
@section('title', 'Edit')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Karyawan</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Barber</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="barber_id">
                                @foreach ($barbers as $barber)
                                    <option value="{{ $barber->id }}" {{ $barber->id == $karyawan->barber_id ? 'selected' : ''}}>{{ $barber->nama }}</option>
                                @endforeach
                            </select>
                            @error('barber_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputName1"
                                placeholder="Nama" value="{{ $karyawan->nama }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="exampleInputName1"
                                placeholder="alamat" value="{{ $karyawan->alamat }}">
                            @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Telepon</label>
                            <input type="text" class="form-control" name="telepon" id="exampleInputName1"
                                placeholder="telepon" pattern="\d{10,15}" title="Telepon harus terdiri dari 10-15 digit angka" value="{{ $karyawan->telepon }}">
                            @error('telepon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputName1"
                                placeholder="email" value="{{ $karyawan->email }}">
                            @error('email')
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
