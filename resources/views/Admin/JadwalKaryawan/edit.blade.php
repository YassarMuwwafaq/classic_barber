@extends('Admin.layout.app')
@section('title', 'Edit Jadwal Karyawan')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Jadwal Karyawan</h4>
                    <p class="card-description"></p>
                    <form action="{{ route('jadwalkaryawan.update', $jadwalKaryawan->id) }}" method="POST" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $jadwalKaryawan->tanggal }}" required>
                            @error('tanggal')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="karyawan_id">Karyawan</label>
                            <select class="form-control" id="karyawan_id" name="karyawan_id">
                                @foreach ($karyawans as $karyawan)
                                    <option value="{{ $karyawan->id }}" {{ $karyawan->id == $jadwalKaryawan->karyawan_id ? 'selected' : '' }}>
                                        {{ $karyawan->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('karyawan_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group d-flex">
                            <div class="mr-2 flex-grow-1">
                                <label for="waktu_mulai">Waktu Mulai</label>
                                <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" value="{{ $jadwalKaryawan->waktu_mulai }}" required>
                                @error('waktu_mulai')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex-grow-1">
                                <label for="waktu_selesai">Waktu Selesai</label>
                                <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" value="{{ $jadwalKaryawan->waktu_selesai }}" required>
                                @error('waktu_selesai')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
