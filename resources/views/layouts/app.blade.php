<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADMIN</title>
    <!-- Standard Favicon -->
    <link href="{{ asset('chopper.ico') }}" rel="shortcut icon" type="image/x-icon">
    <!-- Base Google Font for Web-app -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Google Fonts for Banners only -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- Ion-Icons 4 -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Jquery-Ui-Range-Slider -->
    <link rel="stylesheet" href="css/jquery-ui-range-slider.min.css">
    <!-- Utility -->
    <link rel="stylesheet" href="css/utility.css">
    <!-- Main -->
    <link rel="stylesheet" href="css/bundle.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
          <div class="container">
            <a href="{{ route('admin.index')}}">
                <img src="{{ asset('images/main-logo/groover-branding-1.png') }}" alt="Chopper bzr logo" class="app-brand-logo">
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                  <a class="nav-link mx-2" href="{{ route('admin.index')}}"><i class="fa-solid fa-house"></i> Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="{{ route('products.index')}}"><i class="fa-solid fa-shirt"></i> CRUD productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#!"><i class="fa-solid fa-users"></i> CRUD usuarios </a>
                </li>
                <li class="nav-item ms-3">
                  <a class="btn btn-black btn-rounded" href="{{ route('logout')}}"><i class="fa-solid fa-right-from-bracket"></i> Salir</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <main class="py-5">
            
        </main>
    </div>
    @yield('content')
</body>
<script src="https://kit.fontawesome.com/8325e49c78.js" crossorigin="anonymous"></script>
</html>

