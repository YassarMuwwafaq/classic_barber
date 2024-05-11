<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classic Barber</title>
    <link rel="shortcut icon" href="/assets/logo.svg" type="image/svg+xml" sizes="50x50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mukta:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/assets/logo.svg" alt="Logo" width="130" height="130"
                        class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PRODUCT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                INFORMATION
                            </a>
                            <ul class="dropdown-menu" style="position: relative">
                                <li><a class="dropdown-item" href="#">COURSE</a></li>
                                <li><a class="dropdown-item" href="#">FRANCHISE</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">OUR GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                    </ul>
                    <div class="btnBook d-flex justify-content-center">
                        <button class=" btn-book" type="submit">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        {{-- jumbotron --}}
        <div class="jumbotron jumbotron-fluid jumbotron-full position-relative">
            <div class="color-overlay d-flex justify-content-center align-items-center mt-50">
                <img src="assets/logo.png" class="logoClassic" alt="logo">
            </div>
        </div>


        {{-- carousel --}}
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-absolute">
                <div class="carousel-item active">
                    <img src="assets/slide1.png" class="d-block w-100" alt="slide1">
                </div>
                <div class="carousel-item active">
                    <img src="assets/slide2.png" class="d-block w-100" alt="slide2">
                </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>

        {{-- kenapa  --}}
        <div class="kenapa container-fluid d-flex align-items-center justify-content-center"
            style="background-image: url('assets/bg3.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="row">
                <div class="container-fluid">
                    <div class="row col-xs-12">
                        <div class="col-12 px-5">
                            <h1>Kenapa Harus <span>FORTUNATO CLASSIC BARBERS</span></h1>
                        </div>
                        <div class="col-6 px-5 text-white">
                            <h4>KOMITMEN TERHADAP KUALITAS</h4>
                            <p>KARENA KAMI MENJAMIN KEPUASAN SETIAP KALI ANDA BERKUNJUNG</p>
                            <h4>PROFESIONAL YANG BERSERTIFIKAT</h4>
                            <p>MENJAMIN TENAGA KERJA YANG BERKUALITAS DAN BERSERTIFIKAT SEHINGGA MEMILIKI KEAHLIAN YANG
                                TERUJI DAN TERPERCAYA</p>
                            <h4>INOVASI DAN UP-TO-DATE</h4>
                            <p>KAMI TERUS BERINOVSI DAN MENYESUAIKAN PELAYANAN KAMI DENGAN PERKEMBANGAN TREN TERKINI,
                                SEHINGGA ANDA SELALU TAMPIL FRESH DAN UP-TO-DATE</p>
                            <h4>KENYAMANAN DAN PENGALAMAN PELANGGAN</h4>
                            <p>KARENA FORTUNATO CLASSIC BARBERS DIRANCANG MEMBERIKAN KENYAMANAN MAKSIMAL KEPADA
                                PELANGGAN,
                                DARI INTERIOR YANG NYAMAN HINGGA PELAYANAN YANG RAMAH. SEHINGGA SETIAP ASPEK DI RANCANG
                                UNTUK MEMBUAT PELANGGAN PUAS</p>
                            <h4>MENDUKUNG INDUSTRI BARBER</h4>
                            <p>FORTUNATO CLASSIC BARBER TIDAK HANYA AKTIF MENYEDIAKAN JASA MENCUKUR TETAPI JUGA AKTIF
                                DALAM
                                MENGANGKAT DERAJAT PROFESI BARBER. DENGAN MEMILIH FORTUNATO CLASSIC BARBERS ANDA TURUT
                                BERKONTRIBUSI PADA PENINGKATAN STANDAR KEPROFESIAN BARBERSHOP DI INDONESIA</p>

                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end">
                            <img src="assets/imgKenapa.png" alt="imgKenapa" class="img-fluid" width="600"
                                height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- pelayanan --}}
        <div class="pelayanan container-fluid d-flex align-items-center justify-content-center"
            style="background-image: url('assets/bg-4.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width:100%;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>tes</h1>
                    </div>
                </div>
            </div>
        </div>

        {{-- vol --}}

        <div id="carouselExampleFade" class="carousel slide carousel-fade lokasi" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/bg5.png" class="d-block w-100" alt="lokasi">
                </div>
                <div class="carousel-item">
                    <img src="assets/jumbotron.png" class="d-block w-100 h-100" alt="lokasi">
                </div>
                <div class="carousel-item">
                    <img src="assets/bg5.png" class="d-block w-100" alt="lokasi">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- booking cukur --}}
        <div class="container-fluid booking d-flex align-items-center"
            style="background-image: url('assets/bg6.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width:100%;">
            <div class="row px-5">
                <div class="col-12">
                    <h3>Tunggu apa Lagi</h3>
                </div>
                <div class="col-12">
                    <h1 style="color: #a3353b">Atur jadwal Cukurmu Sekarang</h1>
                </div>
                <div class="div">
                    <button type="button" class="btn btn-danger">
                        Booking Sekarang
                    </button>
                </div>
            </div>
        </div>

        {{-- kata customer --}}
        <div class="container-fluid customer"
            style="background-image: url('assets/bg7.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height:1958px width:100%;">
            <div class="row">
                <div class="col" style="height: 1958px">
                    <h2 class="text-white text-center mt-5">"KATA CUSTOMER"</h2>
                </div>
            </div>
        </div>


        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  position-relative"
            style="background: #434B69">
            <div class="col-12 d-flex align-items-center justify-content-center text-center text-white">
                <h3>Copyright 2024 All Right Reserved by CV.FORTUNATO CLASSIC BARBERS </h3>
            </div>
        </footer>








    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
