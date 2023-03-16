<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project DWP</title>
    @vite(['resources/css/app.css'])
    <link rel="shortcut icon" href="{{ asset('img/main-icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/sweetAlert/swal.min.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('libs/dropZone/dropzone.min.css') }}" type="text/css" />
    @stack('styles')

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand mt-2 mt-lg-0 fw-bold" href="/">
                        <img src="{{ asset('img/main-icon.png') }}" height="15" alt="MDB Logo"
                            loading="lazy" />WoldMHD
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="signin"><i class="bi bi-box-arrow-in-right"></i>&nbsp;SignIn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/signup"><i class="bi bi-person-fill-add"></i>&nbsp;SignUp</a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/community"><i class="bi bi-people-fill"></i>&nbsp;Community</a>
                            </li>
                        @endauth
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            @auth
                                <li>
                                    <a class="dropdown-item" href="#">{{ auth()->user()->name }}</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">{{ auth()->user()->username }}</a>
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <a class="dropdown-item" type="submit" onclick="this.closest('form').submit()"
                                            href="#">Logout</a>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Render views content -->
    <div class="container">
        @yield('content')
    </div>



    <footer class="text-center text-lg-start bg-light text-muted">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="javascript:;" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="javascript:;" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="javascript:;" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="javascript:;" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="javascript:;" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="javascript:;" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="javascript:;" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="javascript:;" class="text-reset">Help</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>

                </div>

            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>

    @vite(['resources/js/app.js'])
    <script src="{{ asset('libs/jQuery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('libs/sweetAlert/swal.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('libs/chartJs/chartjs.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('js/mdb.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
</body>

</html>
