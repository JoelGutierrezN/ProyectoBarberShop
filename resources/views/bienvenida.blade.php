@extends('layouts.master')

@section('titulo', 'Inicio')

@section('contenido')
    @if(session('status'))
        {{ session('status') }}
    @endif
    <!--Carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('img/prueba.png') }}" class="d-block w-100" alt="..." height="350px">
            </div>
        </div>
    </div>

    <!--Boton de Agendar cita-->
    <div class="container">
        <main role="main" class="contenedor contenedor-titulos">
            <div class="contenedor-vertical">
                <a href="{{ action( 'ControladorRutas@agendar_cita', [ 'id' => Auth::id() ] ) }}" class="link boton-agendar">Agenda Tu Cita Ahora</a>
            </div>
        </main>
    </div>
@stop
