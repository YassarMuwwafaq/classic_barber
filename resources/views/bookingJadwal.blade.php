@extends('components.templateBooking')

@section('content')
    {{-- section-1 --}}
    <div class="section">
        <h4 class="text-center mb-3 text-white">Silahkan pilih Jadwal</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="cabang-jadwal">
            <div class="nama-bulan">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">
                                < </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Bulan Mei</a></li>
                        <li class="page-item"><a class="page-link" href="#"> > </a></li>
                    </ul>
                </nav>
            </div>
            <div class="jadwal">
                {{-- JD-1 --}}
                <div class="jadwal-detail">
                    <p><b>3 Juni 2024</b></p>
                    <div class="btn-jadwal">
                        <a href="#">09.00</a>
                        <a href="#">11.00</a>
                        <a href="#">13.00</a>
                        <a href="#">15.00</a>
                        <a href="#">18.00</a>
                    </div>
                </div>
                {{-- JD-2 --}}
                <div class="jadwal-detail">
                    <p><b>3 Juni 2024</b></p>
                    <div class="btn-jadwal">
                        <a href="#">09.00</a>
                        <a href="#">11.00</a>
                        <a href="#">13.00</a>
                        <a href="#">15.00</a>
                        <a href="#">18.00</a>
                    </div>
                </div>
                {{-- JD-3 --}}
                <div class="jadwal-detail">
                    <p><b>3 Juni 2024</b></p>
                    <div class="btn-jadwal">
                        <a href="#">09.00</a>
                        <a href="#">11.00</a>
                        <a href="#">13.00</a>
                        <a href="#">15.00</a>
                        <a href="#">18.00</a>
                    </div>
                </div>
                <div class="jadwal-detail">
                    <p><b>3 Juni 2024</b></p>
                    <div class="btn-jadwal">
                        <a href="#">09.00</a>
                        <a href="#">11.00</a>
                        <a href="#">13.00</a>
                        <a href="#">15.00</a>
                        <a href="#">18.00</a>
                    </div>
                </div>
                <div class="jadwal-detail">
                    <p><b>3 Juni 2024</b></p>
                    <div class="btn-jadwal">
                        <a href="#">09.00</a>
                        <a href="#">11.00</a>
                        <a href="#">13.00</a>
                        <a href="#">15.00</a>
                        <a href="#">18.00</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- panah undo --}}
        <div class="btn-panah">
            <a href="{{ route('bookingbarber') }}"><img src="{{ asset('assets/panah-undo.svg') }}" alt=""></a>
        </div>
    </div>
@endsection
