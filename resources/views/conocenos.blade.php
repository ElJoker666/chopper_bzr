@extends('style')
    @section('styleup')
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Conocenos</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="{{ route('index')}}">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="{{ route('conocenos')}}">Conocenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- About-Page -->
    <div class="page-about u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-me-info u-s-m-b-30">
                        <h1>Bienvenido a 
                            <span>Chopper Bzr</span>
                        </h1>
                        <p>En Chopper Bzr nos enorgullece ofrecerte lo mejor en ropa deportiva, fusionando estilo y funcionalidad para que vivas tu pasión por el deporte con autenticidad y comodidad. Nuestra misión es proporcionar a nuestros clientes prendas de alta calidad que reflejen su energía y determinación.</p>
                        </p>
                        <p>Explora nuestra exclusiva colección de ropa deportiva, diseñada para adaptarse a tus necesidades y resaltar tu estilo único. Ya sea que estés buscando prendas para entrenamientos intensos, actividades al aire libre o simplemente para lucir a la moda, en Chopper Bzr encontrarás lo que necesitas.</p>
                        </p>
                        <p>En nuestro sitio web, te ofrecemos una experiencia de compra fácil y segura. Navega a través de nuestras categorías, descubre las últimas tendencias y encuentra esa pieza perfecta que elevará tu rendimiento y tu estilo. ¡Con Chopper Bzr, viste con confianza y alcanza tus metas!</p>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-me-image u-s-m-b-30">
                        <div class="banner-hover effect-border-scaling-gray">
                            <img class="img-fluid" src="images/about/about-2.jpg" alt="About Picture" width="432">
                        </div>
                    </div>
                    <div class="about-social text-center u-s-m-b-30">
                        <ul class="social-media-list">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100095333974033">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About-Page /- -->
    @endsection