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
                            <a href="{{ route('login')}}">Cuenta</a>
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
                    <!-- Login -->
                    <div class="col-lg-6">
                        <div class="login-wrapper">
                            <h2 class="account-h2 u-s-m-b-20">Login</h2>
                            <h6 class="account-h6 u-s-m-b-30">Bienvenido! Inicia sesion en tu cuenta.</h6>
                            <form action="/login" method="POST">
                                <div class="u-s-m-b-30">
                                @csrf
                                @include('mensajes')
                                </div>
                                <div class="u-s-m-b-30">
                                    <label for="user-name-email">E-mail o tu nombre de Usuario
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="text" id="user-name-email" class="text-field" placeholder="Email o nombre de usuario" name="name">
                                </div>
                                <div class="u-s-m-b-30">
                                    <label for="login-password">Contraseña
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="password" id="login-password" class="text-field" placeholder="Contraseña" name="password">
                                </div>
                                <div class="group-inline u-s-m-b-30">
                                    <div class="group-1">
                                        <input type="checkbox" class="check-box" id="remember-me-token">
                                        <label class="label-text" for="remember-me-token">Recuerdame</label>
                                    </div>
                                    <div class="group-2 text-right">
                                        <div class="page-anchor">
                                            <a href="">
                                                <i class="fas fa-circle-o-notch u-s-m-r-9"></i>Perdiste tu contraseña?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-b-45">
                                    <button class="button button-outline-secondary w-100" type="submit" value="Login">Entrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login /- -->
                </div>
            </div>
        </div>
        <!-- Account-Page /- -->
        <br><br>

 @endsection