@extends('layouts.master')
@section('titulo', 'Contacto')
@section('contenido')
  <div class="container bg-alter">
    <div class="container row align-items-center">
      <div class="container col">
        <p class="Subtitulo text-white"> En esta pagina puedes observar el historial de citas que has realizado con nosotros</p>
      </div>
      <div class="w-100"></div>
      <div class="contenedor col">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">fecha</th>
              <th scope="col">Hora</th>
              <th scope="col">Servicio</th>
              <th scope="col">Costo</th>
            </tr>
          </thead>
          <tbody>
            @foreach($citas as $cita)
              <tr>
                <td>{{$cita->fecha}}</td>
                <td>{{$cita->hora}}</td>
                <td>{{$cita->nombre_servicio}}</td>
                <td>${{$cita->costo}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="contenedor">
      <a href="/agendar_cita" class="btn btn-success">Agendar Cita</a>
    </div>
  </div>
@stop
