<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classic Barber</title>
    <link rel="shortcut icon" href="/assets/logo.svg" type="image/svg+xml" sizes="50x50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mukta:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .jumbotron {
            background: url('assets/jumbotron.png') no-repeat center center;
            background-size: cover;
            height: 130vh;
            /* margin-top: 20px; */
        }

        /* .color-overlay {
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
        } */

        @media (max-width: 768px) {
            .jumbotron {
                /* margin-top: 100px; */
                height: 40vh;

            }
        }
    </style>
</head>

<body>
    @include('components.navbar')
    <main>
        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid jumbotron-full position-relative ">
            <div class="color-overlay d-flex justify-content-center align-items-center" data-aos="fade-up"
                data-aos-duration="2000">
            </div>
        </div>

        <!-- carousel -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-absolute">
                <div class="carousel-item active">
                    <img src="assets/slide1.png" class="d-block w-100" alt="slide1">
                </div>
                <div class="carousel-item">
                    <img src="assets/slide2.png" class="d-block w-100" alt="slide2">
                </div>
            </div>
        </div>

        <!-- kenapa -->
        <div class="kenapa container-fluid d-flex align-items-center justify-content-center"
            style="background-image: url('assets/bg3.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="row rowkenapa">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="row col-12 ">
                        <div class="col-lg-12 px-lg-5">
                            <h1 class="title">Kenapa Harus <span>FORTUNATO CLASSIC BARBERS</span></h1>
                        </div>
                        <div class="col-lg-6 px-5 desc text-white">
                            <h4 class="titleKenapa">KOMITMEN TERHADAP KUALITAS</h4>
                            <p>KARENA KAMI MENJAMIN KEPUASAN SETIAP KALI ANDA BERKUNJUNG</p>
                            <h4 class="titleKenapa">PROFESIONAL YANG BERSERTIFIKAT</h4>
                            <p>MENJAMIN TENAGA KERJA YANG BERKUALITAS DAN BERSERTIFIKAT SEHINGGA MEMILIKI KEAHLIAN YANG
                                TERUJI DAN TERPERCAYA</p>
                            <h4 class="titleKenapa">INOVASI DAN UP-TO-DATE</h4>
                            <p>KAMI TERUS BERINOVASI DAN MENYESUAIKAN PELAYANAN KAMI DENGAN PERKEMBANGAN TREN TERKINI,
                                SEHINGGA ANDA SELALU TAMPIL FRESH DAN UP-TO-DATE</p>
                            <h4 class="titleKenapa">KENYAMANAN DAN PENGALAMAN PELANGGAN</h4>
                            <p>KARENA FORTUNATO CLASSIC BARBERS DIRANCANG MEMBERIKAN KENYAMANAN MAKSIMAL KEPADA
                                PELANGGAN, DARI INTERIOR YANG NYAMAN HINGGA PELAYANAN YANG RAMAH. SEHINGGA SETIAP ASPEK
                                DI RANCANG UNTUK MEMBUAT PELANGGAN PUAS</p>
                            <h4 class="titleKenapa">MENDUKUNG INDUSTRI BARBER</h4>
                            <p>FORTUNATO CLASSIC BARBER TIDAK HANYA AKTIF MENYEDIAKAN JASA MENCUKUR TETAPI JUGA AKTIF
                                DALAM MENGANGKAT DERAJAT PROFESI BARBER. DENGAN MEMILIH FORTUNATO CLASSIC BARBERS ANDA
                                TURUT BERKONTRIBUSI PADA PENINGKATAN STANDAR KEPROFESIAN BARBERSHOP DI INDONESIA</p>
                        </div>
                        <div class="col-lg-6  d-flex align-items-center justify-content-center" data-aos="zoom-in"
                            data-aos-duration="2000">
                            <img src="assets/imgKenapa.png" alt="imgKenapa" class="img-fluid img-mobile" width="600"
                                height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pelayanan -->
        <div class="pelayanan container-fluid" id="services"
            style="background-image: url('assets/bg-4.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width:100%;">
            <div class="container">
                <div class="row">
                    <div class="text-center titlepelayanan">
                        <h2>PELAYANAN KAMI</h2>
                    </div>
                </div>
            </div>

            <div class="container d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="card bg-transparent text-white " style="width: 18rem;">
                            <img src="assets/imgHaircut.png" class="card-img-top" data-aos="zoom-out-up"
                                data-aos="zoom-in-up" data-aos-duration="3000" alt="imgHaircut" width="184"
                                height="218">
                            <div class="card-body ">
                                <h5 class="card-title">HAIRCUT</h5>
                                <p class="card-text">LAYANAN POTONG RAMBUT DENGAN BERBAGAI MODEL SUDAH TERMASUK
                                    KERAMAS
                                </p>
                                <h5>PRICE : 50K-60K</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="card bg-transparent text-white " style="width: 18rem;">
                            <img src="assets/imgColoring.png" class="card-img-top" data-aos="zoom-in-up"
                                data-aos-duration="3000" alt="imgHaircut" width="184" height="218">
                            <div class="card-body ">
                                <h5 class="card-title">COLORING</h5>
                                <p class="card-text">LAYANAN PEWARNAAN RAMBUT SEMUA WARNA
                                </p>
                                <h5>PRICE : 80K-250K</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="card bg-transparent text-white " style="width: 18rem;">
                            <img src="assets/imgHairsolution.png" class="card-img-top" data-aos="zoom-in-up"
                                data-aos-duration="3000" alt="imgHaircut" width="184" height="218">
                            <div class="card-body ">
                                <h5 class="card-title">HAIR SOLUTION</h5>
                                <p class="card-text">LAYANAN MASKER RAMBUT DAN CREAMBATH
                                </p>
                                <h5>PRICE : 50K-65K</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="card bg-transparent text-white " style="width: 18rem;">
                            <img src="assets/imgBeardcut.png" class="card-img-top" data-aos="zoom-in-up"
                                data-aos-duration="3000" alt="imgHaircut" width="184" height="218">
                            <div class="card-body ">
                                <h5 class="card-title">BEARDCUT</h5>
                                <p class="card-text">LAYANAN POTONG KUMIS DAN JANGGUT
                                </p>
                                <h5>PRICE : 20K</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="card bg-transparent text-white " style="width: 18rem;">
                            <img src="assets/imgPerming.png" class="card-img-top" data-aos="zoom-in-up"
                                data-aos-duration="3000" alt="imgHaircut" width="184" height="218">
                            <div class="card-body ">
                                <h5 class="card-title">PERMING</h5>
                                <p class="card-text">LAYANAN PELURUS DAN VOLUME RAMBUT
                                </p>
                                <h5>PRICE : 300K-350K</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- vol -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade lokasi" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/bg5.png" class="d-block w-100" alt="lokasi">
                </div>
                {{-- <div class="carousel-item">
                    <img src="assets/bg5.png" class="d-block w-100 h-100" alt="lokasi">
                </div>
                <div class="carousel-item">
                    <img src="assets/bg5.png" class="d-block w-100" alt="lokasi">
                </div> --}}
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>

        <!-- booking cukur -->
        <div class="container-fluid booking d-flex align-items-center"
            style="background-image: url('assets/bg6.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width:100%;">
            <div class="row px-5">
                <div class="col-lg-12 col-md-6">
                    <h3>Tunggu apa Lagi</h3>
                </div>
                <div class="col-lg-12 col-md-6">
                    <h1 style="color: #a3353b">Atur jadwal Cukurmu Sekarang</h1>
                </div>
                <div class="div">
                    <button type="button" class="btn-bookingnow"
                        onclick="window.location.href='{{ route('bookingbarber') }}'">
                        BOOKING SEKARANG
                    </button>

                </div>
            </div>
        </div>

        <!-- kata customer -->
        <div class="container-fluid customer"
            style="background-image: url('assets/bg7.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height:1958px width:100%;">
            <div class="row">
                <div class="col" style="height: 1958px">
                    <h2 class="text-white text-center mt-5">"KATA CUSTOMER"</h2>
                    <div class="container mt-5 mb-5">
                        <div class="row">
                            <div class="col-lg-6 mt-5">
                                <div class="col-lg-3 gap-2 d-flex mt-3">
                                    <img src="Assets/customer1.png" class="float-start" alt="customer1">
                                    <img src="assets/customer2.png" class="float-start " alt="customer2">
                                </div>
                                <div class="text-white mt-3">
                                    <h2>PERMING</h2>
                                    <h3>LAYANAN PELURUS DAN VOLUME RAMBUT</h3>
                                </div>
                                <div class="button mt-3">
                                    <button type="button" class="btn-perm"
                                        onclick="window.location.href='{{ route('bookingbarber') }}'">BOOKING
                                        SEKARANG</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- produk --}}
                    <div class="container produk d-flex justify-content-center" id="product">
                        <div class="row ">
                            <div class="col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                                <div class="card bg-transparent" style="width: 18rem;">
                                    <img src="assets/pomade.png" alt="pomade" class="card-img-top MX-auto"
                                        data-aos="zoom-in-right" data-aos-duration="3000" alt="pomade">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-white">POMADE</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                                <div class="card bg-transparent" style="width: 18rem;">
                                    <img src="assets/powder.png" alt="powder" class="card-img-top MX-auto"
                                        data-aos="zoom-in-down" data-aos-duration="3000">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-white">POWDER</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                                <div class="card bg-transparent" style="width: 18rem;">
                                    <img src="assets/clay.png" class="card-img-top MX-auto" alt="powder"
                                        data-aos="zoom-in-left" data-aos-duration="3000">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-white">CLAY</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center ">
                                <button type="button" class="btn-produk">BELI PRODUK</button>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex align-items-center" id="contact">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="assets/logo.png" class="img-fluid" data-aos="fade-up"
                                    data-aos-duration="3000" alt="logo" width="434" height="422">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center text-white"
                                data-aos="fade-up" data-aos-duration="3000">
                                <div>
                                    <h5>EMAIL : fortunatoclassicbarbers@gmail.com</h5>
                                    <h5>PHONE : 0812-7200-3036</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        @include('components.footer')
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
