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

</head>
<style>
    body {
        background: url('assets/gallery/bgCourse.png') no-repeat center center fixed;
        background-size: cover;
        padding: 0;
        height: auto;
    }

    .title {
        color: #FFF;
        font-family: Mukta;
        font-size: 40px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        letter-spacing: 2px;
    }

    .icon-back {
        position: relative;
        top: 20px;
        left: 20px;
        cursor: pointer;
        width: min-content;
    }

    p {
        color: #FFF;
        font-family: Mukta;
        font-size: 25px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 1.25px;
    }

    .btnCourse {
        display: flex;
        width: 202px;
        padding: 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;

        border-radius: 11px;
        border: 1px solid #FFF;
        background: #434B69;
    }

    .btnCourse:hover {
        background: #6773a0;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        transform: translateY(-3px);
    }

    .btnCourse:active {
        background: #2451f6;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transform: translateY(1px);
</style>

<body>
    @include('components.navbar')

    <main>
        <div class="title container-fluid d-flex align-items-center justify-content-center"
            style="background-image: url('assets/gallery/bgTitle.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height:250px">
            <div class="row rowtitle">
                <h3 class="text-white">Course Information</h3>
            </div>
        </div>

        <div class="icon-back">
            <img src="/assets/gallery/iconBack.png" alt="Back Icon" width="30">
        </div>

        <div class="container-fluid d-flex mb-5 mt-5">
            <div class="row">
                <div class="imgPelatih col-lg-6 col-sm-12">
                    <img src="assets/gallery/imgPelatih.png" alt="pelatih" style="width: 700px; height:500px">
                </div>
            </div>
        </div>

        <div class="container pelatih">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 col-md-12 text-start text-white text-section ">
                    <h3 class="text-center title ">Pelatih</h3>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Eget nunc lobortis mattis aliquam. Tortor consequat id porta
                        nibh
                        venenatis. Eget aliquet nibh praesent tristique magna. Pellentesque nec nam aliquam sem et
                        tortor consequat id porta. Sed risus ultricies tristique nulla aliquet. Congue mauris
                        rhoncus
                        aenean vel. </p>
                </div>
            </div>
        </div>


        <div class="container persyaratan mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12 text-white">
                    <h3 class="text-center title">Persyaratan dan Benefit Kursus</h3>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut
                        labore et dolore magna aliqua. Eget nunc lobortis mattis aliquam. Tortor consequat id porta
                        nibh
                        venenatis. Eget aliquet nibh praesent tristique magna. Pellentesque nec nam aliquam sem et
                        tortor consequat id porta. Sed risus ultricies tristique nulla aliquet. Congue mauris
                        rhoncus
                        aenean vel. </p>
                </div>
            </div>
        </div>

        <div class="container price mt-5 mb-5">
            <div class="row ">
                <div class="col-lg-6 col-md-12 text-white text-start">
                    <h3 class="text-center title">Price</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Eget nunc lobortis mattis aliquam. Tortor consequat id porta nibh
                        venenatis. Eget aliquet nibh praesent tristique magna. Pellentesque nec nam aliquam sem et
                        tortor consequat id porta. Sed risus ultricies tristique nulla aliquet. Congue mauris rhoncus
                        aenean vel. </p>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <img src="assets/gallery/price.png" alt="imgPrice">
                </div>
            </div>
        </div>

        <div class="daftar text-center text-white mt-5 mb-5">
            <p>Ingin daftar Kursus? masukkan data anda</p>
            <div class="d-flex justify-content-center">
                <button class="btnCourse text-white">Daftar</button>
            </div>
        </div>








    </main>

    @include('components.footer')

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
