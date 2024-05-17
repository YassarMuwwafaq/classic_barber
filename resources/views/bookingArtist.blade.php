<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking-Artist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_Booking.css">
    <style>
        /* CSS untuk layar yang lebih kecil */
        @media (max-width: 768px) {
            .navbar {
                padding-top: 10px;
                /* Ubah padding atas untuk layar yang lebih kecil */
                padding-bottom: 5px;
                /* Ubah padding bawah untuk layar yang lebih kecil */
            }

            .card {
                width: calc(50% - 20px);
                /* Mengatur lebar card untuk layar yang lebih kecil */
            }

            .btn-primary {
                padding: 10px 30%;
                /* Mengatur padding tombol untuk layar yang lebih kecil */
            }
        }

        /* CSS untuk layar yang sangat kecil, misalnya ponsel */
        @media (max-width: 576px) {
            .navbar {
                padding-top: 15px;
                /* Ubah padding atas untuk layar yang sangat kecil */
                padding-bottom: 5px;
                /* Ubah padding bawah untuk layar yang sangat kecil */
            }

            .section .cabang {
                gap: 20px;
                /* Mengatur jarak antara card untuk layar yang sangat kecil */
            }

            .card {
                width: calc(100% - 20px);
                /* Mengatur lebar card untuk layar yang sangat kecil */
            }

            .btn-primary {
                padding: 10px 20%;
                /* Mengatur padding tombol untuk layar yang sangat kecil */
            }
        }

        @media screen and (max-width: 600px) {
            .card-layanan {
                flex-basis: calc(50% - 50px);
                /* 50% - 50px untuk hanya menampilkan 2 card dalam satu baris */
            }
        }
    </style>
</head>

<body>
    <div class="bg-image">
        <div class="bg-overlay"></div> <!-- Tambahkan overlay di sini -->
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="180">
            </a>
            <!-- Kalimat di tengah -->
            <span class="navbar-text text-white">
                STATUS : NAMA CUSTOMER 12/12/2012
            </span>
            <!-- Button Logout -->
            <div class="btn-div">
                <button class="btn-logout">Logout</button>
            </div>
        </div>
    </nav>

    {{-- section-1 --}}
    <div class="section-layanan">
        <h4 class="text-center mb-3 text-white">Silahkan pilih service</h4>
        <!-- Memindahkan tulisan di atas card dan menengahkannya -->
        <div class="cabang-Artis">
            {{-- card-1 --}}
            <div class="card-artis">
                <img src="{{ asset('assets/componentHairArtis/hairArtis1.svg') }}" alt="">
                <h5 class="pt-3 text-white">Nama Hair Artist</h5>
                <p class="text-white">Vol. 1</p>
            </div>
            {{-- card-2 --}}
            <div class="card-artis">
                <img src="{{ asset('assets/componentHairArtis/hairArtis2.svg') }}" alt="">
                <h5 class="pt-3 text-white">Nama Hair Artist</h5>
                <p class="text-white">Vol. 1</p>
            </div>
            {{-- card-3 --}}
            <div class="card-artis">
                <img src="{{ asset('assets/componentHairArtis/hairArtis3.svg') }}" alt="">
                <h5 class="pt-3 text-white">Nama Hair Artist</h5>
                <p class="text-white">Vol. 1</p>
            </div>
        </div>
        <!-- Tambahkan lebih banyak carousel-item berisi tiga card di sini -->
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
