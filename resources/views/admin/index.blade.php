@extends('layouts.app')
@section('content')
@auth
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <h1 id="card_title">
                            Bienvenido al modo administrador
                        </h1>
                    </div>
                </div>
                <div class="card-body">
                  <p>Que es lo quieres hacer: </p>
                  <a class="btn btn-primary" href="{{ route('products.create') }}" role="button">Agregar Productos</a>
                  <a class="btn btn-primary" href="#" role="button">Agregar usuarios</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endauth
@endsection