<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Barber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montaga&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="assets/LogoBarber.svg" alt="" width="94" height="83">
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Information
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Course</a></li>
                                <li><a class="dropdown-item" href="#">Franchise</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <!-- Button Book Now -->
                    <button class="btn-book" type="submit">Book Now</button>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1>Sharp Cuts, Sharp Looks: Unleash Your Style</h1>
                        <h3>At Classic Barber's</h3>
                        <div class="link d-flex ">
                            <button class="btn-home" type="submit">Look More</button>
                            <div class="location">
                                <a href="/" style="color: white">Our Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="assets/imghome.png" alt="icontiktok" width="513" height="486">
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/logoBarber.svg" alt="" width="644" height="574">
                    </div>
                    <div class="col-lg-6">
                        <p><span>Lorem ipsum</span> dolor sit amet consectetur adipisicing elit. Optio laboriosam velit
                            dolorem a alias! Provident explicabo quaerat incidunt ipsa voluptatibus, laborum tempora
                            temporibus accusantium harum. Asperiores quas iure id ea!</p>
                        <div class="icon-about">
                            <img src="assets/iconYoutube.png" alt="iconyoutube" width="24" height="25">
                            <img src="assets/iconInstagram.png" alt="iconinstagram" width="24" height="25">
                            <img src="assets/iconTiktok.png" alt="icontiktok" width="24" height="25">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
