@extends('admin.layout.app')
@section('title', 'Tambah')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Jadwal</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('jadwalkaryawan.store') }}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Jadwal</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="karyawan_id">
                                @foreach ($karyawans as $karyawan)
                                    <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                                @endforeach
                            </select>
                            @error('karyawan_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal">
                            @error('tanggal')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="waktu">Sesi Waktu</label>
                            <select class="form-control" id="waktu" name="waktu">
                                @foreach ($waktus as $waktu)
                                    <option value="{{ $waktu }}">{{ $waktu }}</option>
                                @endforeach
                            </select>
                            @error('waktu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="tersedia" id="tersedia" value="1"> Tersedia
                                </label>
                            </div>
                            @error('tersedia')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                        <a href="{{ route('jadwalkaryawan.index') }}" class="btn btn-dark">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
