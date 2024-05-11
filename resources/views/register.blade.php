<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css_login/style.css">
</head>

<body>
    <div class="bg-image">
        <div class="bg-overlay"></div> <!-- Tambahkan overlay di sini -->
        <img src="{{asset('assets/logo_gold.png')}}" alt="Logo Barber" class="logo-barber">
    </div>
    <div class="container">
        <div class="mb-3 text-center">
            <a href="{{ route('teslogin') }}" class="nav-login-register ">Login</a>
            <a href="{{ route('tesregister') }}" class="nav-login-register active">Register</a>
        </div>
        <!-- Form Login -->
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('login') }}" class="col-md-6">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Masukkan Email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukan Kata Sandi">
                </div>
                <div class="mb-3 text-center " style="margin-top: 40px;">
                    <button type="submit" class="btn btn-lg w-100 btn-submit">Register</button>
                </div>
                <div class="mb-3 text-center">
                    <p>Belum punya akun ? <a href="{{ route('register') }}" class="register-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
