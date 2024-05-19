<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking-barber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style_Booking.css') }}">
</head>

<body>
    <div class="bg-image">
        <div class="bg-overlay"></div> <!-- Tambahkan overlay di sini -->
    </div>

    {{-- Navbar --}}
    <div class="navbar">
        <div class="container">
            <a href=""><img src="{{ asset('assets/logo.svg') }}" alt=""></a>
            <div class="status">STATUS : NAMA CUSTOMER 12/12/2012</div>
            <div class="btn-logout">Log Out</div>
        </div>
    </div>

    @yield('content')

    <div class="footer">
        <div class="img"><img src="{{ asset('assets/footerLogo.svg') }}" alt=""></div>
        <p>@CLASSICBARBERS</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
