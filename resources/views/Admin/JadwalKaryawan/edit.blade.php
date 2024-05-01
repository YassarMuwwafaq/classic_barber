@extends('admin.layout.app')
@section('title', 'Edit')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Jadwal Karyawan</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('jadwalkaryawan.update', $jadwalKaryawan->id) }}" method="POST"
                        enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Karyawan</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="karyawan_id">
                                @foreach ($karyawans as $karyawan)
                                    <option value="{{ $karyawan->id }}"
                                        {{ $karyawan->id == $jadwalKaryawan->karyawan_id ? 'selected' : '' }}>
                                        {{ $karyawan->nama }}</option>
                                @endforeach
                            </select>
                            @error('karyawan_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="exampleInputName1"
                                placeholder="Tanggal" value="{{ $jadwalKaryawan->tanggal }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="waktu">Sesi Waktu</label>
                            <select class="form-control" id="waktu" name="waktu">
                                @foreach ($waktus as $waktu)
                                    <option value="{{ $waktu }}"
                                        {{ $waktu == $jadwalKaryawan->waktu_mulai ? 'selected' : '' }}>
                                        {{ $waktu }}
                                    </option>
                                @endforeach
                            </select>
                            @error('waktu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="tersedia" id="tersedia"
                                        {{ $jadwalKaryawan->tersedia ? 'checked' : '' }} >
                                    Tersedia
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                        <a href="{{ route('jadwalkaryawan.index') }}" class="btn btn-dark">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
