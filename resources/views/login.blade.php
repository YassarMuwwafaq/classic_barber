<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="/assets/logo.svg" type="image/svg+xml" sizes="50x50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_LogReg.css">
</head>

<body>
    <div class="bg-image">
        <div class="bg-overlay"></div> <!-- Tambahkan overlay di sini -->
        <img src="{{ asset('assets/logo.png') }}" alt="Logo Barber" class="logo-barber">
    </div>
    <div class="container">
        <div class="mb-3 text-center">
            <a href="{{ route('login') }}" class="nav-login-register active">Login</a>
            <a href="{{ route('register') }}" class="nav-login-register">Register</a>
        </div>
        <!-- Form Login -->
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('login') }}" class="col-md-6">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        aria-describedby="emailHelp" placeholder="Masukkan Email Anda" required>
                    @if (session('error') || $errors->any())
                        <div class="text-danger" role="alert">
                            @if (session('error'))
                                {{ session('error') }}
                            @else
                                {{ $errors->first() }}
                            @endif
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukan Kata Sandi">
                </div>
                {{-- <div class="mb-3 text-left">
                    <p><a href="#" class="register-link">Lupa kata sandi ?</a></p>
                </div> --}}
                <div class="mb-3 text-center" style="margin-top: 40px;">
                    <button type="submit"
                        class="btn btn-lg w-100 border-white btn-submit text-white">{{ __('Log in') }}</button>
                </div>
                <div class="mb-3 text-center">
                    <p>Sudah punya akun? <a href="{{ route('register') }}" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
