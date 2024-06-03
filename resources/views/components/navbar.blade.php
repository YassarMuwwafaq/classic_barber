<header id="home">
    <nav class="navbar navbar-expand-lg" style="background-color:black; font-size:12px;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/logo.svg" class="logoNav" alt="Logo" width="130" height="130"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('/') ? 'active' : ' ' }} " aria-current="page"
                            href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#product">PRODUCT</a>
                    </li>
                    <li class="nav-item dropdown info-link-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            INFORMATION
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-white" href="/course">COURSE</a></li>
                            <li><a class="dropdown-item text-white" href="/#">FRANCHISE</a></li>
                            <li><a class="dropdown-item text-white" href="/#">OUR STORY</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">OUR GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">CONTACT US</a>
                    </li>

                </ul>
                <div class="btnBook d-flex justify-content-center gap-2 ">
                    @auth
                        <li class="d-flex nav-item dropdown info-link-dropdown align-items-center">
                            <a class="auth nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <a class="btn-login me-2" href="{{ route('login') }}">LOGIN</a>
                    @endguest
                    <a class="btn-book me-2" href="{{ route('bookingbarber') }}">BOOKING</a>
                </div>
            </div>
        </div>
    </nav>
</header>
