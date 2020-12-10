@extends('layouts.master')
@section('titulo', 'Contacto')
@section('contenido')
  <div class="container bg-alter">
    <div class="container row align-items-center">
      <div class="container col">
        <p class="Subtitulo text-white"> En este apartado puedes observar el historial de citas que has realizado con nosotros</p>
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
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($citas as $cita)
              <tr>
                <td>{{$cita->fecha}}</td>
                <td>{{$cita->hora}}</td>
                <td>{{$cita->nombre_servicio}}</td>
                <td>${{$cita->costo}}</td>
                <td><a class="btn btn-secondary" href="#">Ver Ticket</a></td>
                @if( ($cita->fecha) > (now()))
                  <td><a class="btn btn-warning" href="#">Editar</a></td>
                  <td><a class="btn btn-danger" href="#">Cancelar</a></td>
                @else
                  <td><button type="button" class="btn btn-md btn-success" disabled>Finalizada</button></td>
                @endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="contenedor">
      <a href="{{ action( 'ControladorRutas@agendar_cita', [ 'id' => Auth::id() ] ) }}" class="btn btn-success">Agendar Cita</a>
    </div>
  </div>
@stop
