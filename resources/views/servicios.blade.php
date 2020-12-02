@extends('layouts.master')
@section('titulo', 'Contacto')
@section('contenido')
<div class="container">
  <div class="contenedor">
    <div class="row">

    @foreach($servicios as $servicio)
      <div class="col-sm-4">
        <div class="card text-white bg-secondary mb-3">
          <img src="img/prueba.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-header Subtitulo">{{ $servicio->nombre_servicio }}</h5>
            <p class="card-title precio text-center">${{ $servicio->costo }}</p>
            <p class="card-text">{{ $servicio->descripcion}}</p>
          </div>
        </div>
      </div>
    @endforeach

    </div>
  </div>

</div>
@stop
