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

    .btn-custom {
        display: flex;
        width: 326px;
        padding: 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;

        border-radius: 24px;
        background: #434B69;

        color: #FFF;
        font-family: Mukta;
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .btn-custom:hover {
        background: #5a6387;
        transform: scale(1.05);
    }

    .btn-custom:active {
        background: #3a4258;
        transform: scale(0.95);
    }

    .btn-custom:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(67, 75, 105, 0.5);
    }

    .img-custom {
        max-width: 100%;
        /* Ensure the image scales down on smaller screens */
        height: auto;
    }
</style>

<body>
    @include('components.navbar')

    <main>
        <div class="container text-center my-4">
            <div class="button text-center d-flex justify-content-center">
                <button class="btn btn-custom btn-lg">
                    INFO FRANCHISE
                </button>
            </div>

            <div class="img img-custom mt-3">
                <img src="/assets/imgFranchise.png" alt="franchise" class="img-fluid">
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
