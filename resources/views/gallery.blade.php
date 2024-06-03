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
        background: url('assets/gallery/background.png') no-repeat fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
        height: auto;
    }

    .icon-back {
        position: relative;
        top: 20px;
        left: 20px;
        cursor: pointer;

    }

    @media (max-width: 768px) {
        .gallery {
            background-size: contain;
        }
    }
</style>

<body>
    @include('components.navbar')

    <main>


        <div class="title container-fluid d-flex align-items-center justify-content-center"
            style="background-image: url('assets/gallery/bgTitle.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height:250px">
            <div class="row rowtitle">
                <h3 class="text-white">Our Gallery</h3>
            </div>
        </div>

        <div class="icon-back">
            <img src="/assets/gallery/iconBack.png" alt="Back Icon" width="30">
        </div>

        <div class="gallery container mt-4 text-center">
            <div class="row" id="gallery-row" data-aos="fade-up">
                <!-- Gambar akan dimasukkan oleh JavaScript -->
            </div>
        </div>

        <div class="beforeAfter container-fluid d-flex align-items-center justify-content-center"
            style="background-image: url('assets/gallery/beforeAfter.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height:250px">
            <div class="row rowtitle">
                <h3 class="text-white">Before and After <span class="text-bold">Haircut</span></h3>
            </div>
        </div>

        <div class="beforeAfterImg container mt-4 text-center">
            <div class="row" id="gallery-row2">
                <!-- Gambar akan dimasukkan oleh JavaScript -->
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

        document.addEventListener('DOMContentLoaded', function() {
            const images = @json($images);
            const images2 = @json($images2);

            const galleryRow = document.getElementById('gallery-row');
            const galleryRow2 = document.getElementById('gallery-row2');

            images.map(image => {
                const col = document.createElement('div');
                col.className = 'col-6 col-md-4 mb-4';
                col.innerHTML = `
                        <img src="/assets/gallery/${image}" alt="Gallery Image" class="img-fluid" >
                    `;
                galleryRow.appendChild(col);
            });

            images2.map(image => {
                const col = document.createElement('div');
                col.className = 'col-6 col-md-4 mb-4';
                col.innerHTML = `
                        <img src="/assets/gallery/${image}" alt="Gallery Image" class="img-fluid">
                    `;
                galleryRow2.appendChild(col);
            });
        });
    </script>
</body>

</html>
