@extends('components.templateBooking')

@section('content')
    <div class="section">
        <h4 class="text-center mb-3 text-white">Silahkan pilih Jadwal</h4>
        <div class="cabang-jadwal">
            <div class="nama-bulan">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item {{ $currentDate->isSameMonth(Carbon\Carbon::now()) ? 'disabled' : '' }}">
                            <a class="page-link"
                                href="{{ $currentDate->isSameMonth(Carbon\Carbon::now()) ? '#' : route('bookingjadwal', ['barber_id' => $barber->id, 'layanan_id' => $layanan->id, 'karyawan_id' => $karyawan->id, 'month' => $previousDate->format('m'), 'year' => $previousDate->format('Y')]) }}">
                                &lt;
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">{{ $currentDate->format('F Y') }}</a></li>
                        <li class="page-item">
                            <a class="page-link"
                                href="{{ route('bookingjadwal', ['barber_id' => $barber->id, 'layanan_id' => $layanan->id, 'karyawan_id' => $karyawan->id, 'month' => $nextDate->format('m'), 'year' => $nextDate->format('Y')]) }}">
                                &gt;
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="jadwal">
                @php
                    $days = [
                        'Sunday' => 'Minggu',
                        'Monday' => 'Senin',
                        'Tuesday' => 'Selasa',
                        'Wednesday' => 'Rabu',
                        'Thursday' => 'Kamis',
                        'Friday' => 'Jumat',
                        'Saturday' => 'Sabtu',
                    ];

                    $months = [
                        'January' => 'Januari',
                        'February' => 'Februari',
                        'March' => 'Maret',
                        'April' => 'April',
                        'May' => 'Mei',
                        'June' => 'Juni',
                        'July' => 'Juli',
                        'August' => 'Agustus',
                        'September' => 'September',
                        'October' => 'Oktober',
                        'November' => 'November',
                        'December' => 'Desember',
                    ];

                    $noAvailableSchedule = true;
                @endphp
                @if ($jadwals->isEmpty())
                    <p class="text-center">Jadwal Tidak Tersedia</p>
                @else
                    @foreach ($jadwals as $jadwal)
                        @php
                            $tanggal = new DateTime($jadwal->tanggal, new DateTimeZone('Asia/Jakarta'));
                            $currentDate = new DateTime('today', new DateTimeZone('Asia/Jakarta')); // Today without time part
                            $currentTime = new DateTime('now', new DateTimeZone('Asia/Jakarta')); // Current time

                            if ($tanggal < $currentDate) {
                                continue; // Skip dates that have already passed
                            }

                            $dayName = $days[$tanggal->format('l')];
                            $monthName = $months[$tanggal->format('F')];

                            $availableTimes = [];
                            $start = strtotime($jadwal->waktu_mulai);
                            $end = strtotime($jadwal->waktu_selesai);
                            $interval = 60 * 60; // 1 jam

                            for ($time = $start; $time < $end; $time += $interval) {
                                $jam = date('H:i', $time);
                                $slotDateTime = new DateTime($jadwal->tanggal . ' ' . $jam, new DateTimeZone('Asia/Jakarta'));

                                // Check if the time slot is booked
                                if (!isset($jadwalBooked[$jadwal->tanggal]) || !in_array($jam, $jadwalBooked[$jadwal->tanggal])) {
                                    // Check if the time slot is not in the past
                                    if (!($tanggal == $currentDate && $slotDateTime <= $currentTime)) {
                                        $availableTimes[] = $jam;
                                    }
                                }
                            }
                        @endphp

                        @if (count($availableTimes) > 0)
                            @php
                                $noAvailableSchedule = false;
                            @endphp
                            <div class="jadwal-detail">
                                <p><b>{{ $dayName }}, {{ $tanggal->format('j') }} {{ $monthName }} {{ $tanggal->format('Y') }}</b></p>
                                <div class="btn-jadwal">
                                    @foreach ($availableTimes as $jam)
                                        <a href="{{ route('konfirmasiBooking', ['barber_id' => $barber->id, 'layanan_id' => $layanan->id, 'karyawan_id' => $karyawan->id, 'tanggal' => $jadwal->tanggal, 'waktu' => $jam]) }}">
                                            {{ $jam }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif

                @if ($noAvailableSchedule)
                    <p class="text-center">Jadwal Tidak Tersedia</p>
                @endif
            </div>
        </div>
        <div class="btn-panah">
            <a href="{{ route('bookingartist', ['barber_id' => $barber->id, 'layanan_id' => $layanan->id]) }}">
                <img src="{{ asset('assets/panah-undo.svg') }}" alt="">
            </a>
        </div>
    </div>
@endsection