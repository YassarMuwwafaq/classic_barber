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
        background: url('assets/bg3.png') no-repeat center center fixed;
        background-size: cover;
        padding: 0;
        height: auto;
    }



    .layout {
        display: inline-flex;
        padding: 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        background: #FFF;
    }

    h1 {
        color: #993237;
        font-family: Mukta;
        font-size: 48px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }


    p,
    ol {
        color: #FFF;
        font-family: Mukta;
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
</style>

<body>
    @include('components.navbar')

    <main>
        <div class="title container mt-5">
            <div class="layout">
                <h1>OUR STORY</h1>
            </div>
        </div>

        <div class="content container mt-5">
            <div class="row">
                <div class="col-9">
                    <p>
                        Fortunato Classic Barbers berdiri di akhir tahun 2015, yang berawal dari bekas bangunan garasi
                        kecil.
                        "Fortunato Classic Barbers" mengandung beberapa arti. "Fortunato" memiliki arti keberuntungan.
                        "Classic"
                        yaitu tempat yang tak akan pernah mati walau hidup di zaman modern sekalipun yang pastinya
                        selalu
                        dibutuhkan semua orang. Classic / klasik juga memiliki konotasi agung dan serba tinggi,
                        sedangkan kata
                        "Barbers" merupakan tenaga kerja dan disini bukan hanya mengandalkan 1 orang saja, melainkan
                        meliputi
                        para pemimpin serta para pekerjanya yang memiliki kualitas yang terbaik di profesi di bidang
                        rambut
                        pria. Sampai saat ini Fortunato Classic Barbers telah memiliki tiga cabang yaitu:

                    <ol>
                        <li>Vol I di Jl. Sunan Giri Kota Baru</li>
                        <li>Vol II di Jl. Ir. H. Juanda Mayang</li>
                        <li>Vol III di Jl. Fatah Laside Kebun Handil, Jelutung</li>
                        <li>Vol+ di Jl. AR. Saleh No. 49 RT. 05 Paal Merah Lama, Jambi Selatan Kota Jambi</li>
                    </ol>
                    </p>
                </div>
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
