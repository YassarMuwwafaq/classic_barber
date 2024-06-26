<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="/assets/logo.svg" type="image/svg+xml" sizes="50x50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_LogReg.css">
</head>

<body>
    <div class="bg-image">
        <div class="bg-overlay"></div>
        <img src="{{ asset('assets/logo.png') }}" alt="Logo Barber" class="logo-barber">
    </div>
    <div class="container">
        <div class="mb-3 text-center">
            <a href="{{ route('login') }}" class="nav-login-register ">Login</a>
            <a href="{{ route('register') }}" class="nav-login-register active">Register</a>
        </div>
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('register') }}" class="col-md-6">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan Nama Anda" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        aria-describedby="emailHelp" placeholder="Masukkan Email Anda" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan Kata Sandi" required>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="confirm_password" name="password_confirmation"
                        placeholder="Konfirmasi Kata Sandi" required>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-lg w-100 btn-submit text-white border-white">Register</button>
                </div>
                <div class="mb-3 text-center">
                    <p>Sudah punya akun? <a href="{{ route('login') }}" class="register-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
