@extends('home.stylehome')
    @section('stylehome')
    @auth
        
    <p>
        hola ya iniciaste sesion uwu
    </p>
    @endauth

    @guest
        <p>Para ver el contenido necesitas <a href="/login">Iniciar sesion</a></p>
    @endguest
    @endsection