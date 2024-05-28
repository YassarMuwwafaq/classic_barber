@extends('admin.layout.app')
@section('title', 'Tambah Jadwal Karyawan')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Tambah Jadwal Karyawan</h4>
                    <form action="{{ route('jadwalkaryawan.store') }}" method="POST" id="jadwalForm">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div id="karyawanInputs">
                            <div class="form-group d-flex">
                                <div class="mr-2 flex-grow-1">
                                    <label for="karyawan_id">Karyawan</label>
                                    <select class="form-control" name="karyawan_id[]" required>
                                        @foreach ($karyawans as $karyawan)
                                            <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mr-2" style="width: 25%;">
                                    <label for="waktu_mulai">Waktu Mulai</label>
                                    <input type="time" class="form-control" name="waktu_mulai[]" required>
                                </div>
                                <div style="width: 25%;">
                                    <label for="waktu_selesai">Waktu Selesai</label>
                                    <input type="time" class="form-control" name="waktu_selesai[]" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success mb-4" id="addKaryawan">Tambah Karyawan</button>
                        </div>
                        <!-- Add more fields here if needed -->
                        <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                        <a href="{{ route('jadwalkaryawan.index') }}" class="btn btn-dark">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('addKaryawan').addEventListener('click', function() {
            var karyawanInputs = document.getElementById('karyawanInputs');
            var newKaryawanInput = document.createElement('div');
            newKaryawanInput.classList.add('form-group', 'd-flex');
            newKaryawanInput.innerHTML = `
                <div class="mr-2 flex-grow-1">
                    <label for="karyawan_id">Karyawan</label>
                    <select class="form-control" name="karyawan_id[]" required>
                        @foreach ($karyawans as $karyawan)
                            <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mr-2" style="width: 25%;">
                    <label for="waktu_mulai">Waktu Mulai</label>
                    <input type="time" class="form-control" name="waktu_mulai[]" required>
                </div>
                <div style="width: 25%;">
                    <label for="waktu_selesai">Waktu Selesai</label>
                    <input type="time" class="form-control" name="waktu_selesai[]" required>
                </div>
            `;
            karyawanInputs.appendChild(newKaryawanInput);
        });
    </script>
@endsection
