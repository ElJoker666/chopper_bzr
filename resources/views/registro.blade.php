@extends('style')

 @section('styleup')
        <!-- Page Introduction Wrapper -->
        <div class="page-style-a">
            <div class="container">
                <div class="page-intro">
                    <h2>Mi cuenta</h2>
                    <ul class="bread-crumb">
                        <li class="has-separator">
                            <i class="ion ion-md-home"></i>
                            <a href="{{ route('index')}}">Inicio</a>
                        </li>
                        <li class="is-marked">
                            <a href="{{ route('registro')}}">Cuenta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Introduction Wrapper /- -->
        <!-- Account-Page -->
        <div class="page-account u-s-p-t-80">
            <div class="container">
                <div class="row">

                    <!-- Register -->
                    <div class="col-lg-6">
                        <div class="reg-wrapper">
                            <h2 class="account-h2 u-s-m-b-20">Registro</h2>
                            <h6 class="account-h6 u-s-m-b-30">Registrate a este sitio para ver las mejores ofertas en el mercado.</h6>
                            <form action="/register" method="POST">
                                @csrf
                                <div class="u-s-m-b-30">
                                    <label for="user-name">Usuario
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="text" id="" class="text-field" placeholder="Usuario" name="name">
                                </div>
                                <div class="u-s-m-b-30">
                                    <label for="email">E-mail
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="email" id="" class="text-field" placeholder="E-mail" name="email">
                                </div>
                                <div class="u-s-m-b-30">
                                    <label for="password">Contraseña
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="password" id="" class="text-field" placeholder="Contraseña" name="password">
                                </div>
                                <div class="u-s-m-b-30">
                                    <label for="password">Confirma Contraseña
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="password" id="" class="text-field" placeholder="Contraseña" name="password_confirmation">
                                </div>
                                <div class="u-s-m-b-30">
                                    <input type="checkbox" class="check-box" id="accept">
                                    <label class="label-text no-color" for="accept">Aceptas los 
                                        <a href="" class="u-c-brand">Terminos & condiciones</a>
                                    </label>
                                </div>
                                <div class="u-s-m-b-45">
                                    <button class="button button-primary w-1000" type="submit" value="Registrarse">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Register /- -->
                </div>
            </div>
        </div>
        <!-- Account-Page /- -->
        <br><br>

 @endsection