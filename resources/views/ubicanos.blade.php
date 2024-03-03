@extends('style')
    @section('styleup')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Ubicanos</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a  href="{{ route('index')}}">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="{{ route('conocenos')}}">Conocenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
 <!-- Contact-Page -->
 <div class="page-contact u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="touch-wrapper">
                        <h1 class="contact-h1">Ponte en contacto con nosotros</h1>
                        <form>
                            <div class="group-inline u-s-m-b-30">
                                <div class="group-1 u-s-p-r-16">
                                    <label for="contact-name">Nombre
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="text" id="contact-name" class="text-field" placeholder="Nombre">
                                </div>
                                <div class="group-2">
                                    <label for="contact-email">Tu Email
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="text" id="contact-email" class="text-field" placeholder="Email">
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="contact-subject">Asunto
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="contact-subject" class="text-field" placeholder="Asunto">
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="contact-message">Mensaje:</label>
                                <textarea class="text-area" id="contact-message"></textarea>
                            </div>
                            <div class="u-s-m-b-30">
                                <button type="submit" class="button button-outline-secondary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="information-about-wrapper">
                        <h1 class="contact-h1">Información acerca de nosotros</h1>
                        <p>
                        <p>En Chopper Bzr, nos dedicamos a ofrecer una experiencia única a nuestros clientes. Nuestra historia se teje con pasión por el deporte y el compromiso de proporcionar ropa deportiva de calidad que impulse tu rendimiento y resalte tu estilo.</p>
                        </p>
                        <p>
                        <p>Nos enorgullece destacar por la calidad de nuestros productos, diseñados meticulosamente para satisfacer las demandas de los entusiastas del deporte moderno. Colaboramos con diseñadores apasionados que comparten nuestra visión de fusionar moda y funcionalidad.</p>
                        </p>
                    </div>
                    <div class="contact-us-wrapper">
                        <h1 class="contact-h1">Contactanos</h1>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Ubicación</h6>
                            <span>C 15 1097 Fracc Nuevo Mirasierra</span>
                            <span>Saltillo Coahuila, CP 25016</span>
                        </div>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Email</h6>
                            <span>ChopperBzruwu@gmail.com</span>
                        </div>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Celular</h6>
                            <span>+52 1 844 334 0771</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    <!-- Contact-Page /- -->
    @endsection