@extends('layouts.master')
@section('titulo', 'Contacto')
@section('contenido')
<div class="container">
  <div class="contenedor row align-items-center">
    <div class="contenedor col">
      <p class="Subtitulo text-white"> Direcciones Registradas en Studio F</p>
    </div>
    <div class="w-100"></div>
    <div class="contenedor col">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Calle</th>
            <th scope="col">Numero Exterior</th>
            <th scope="col">Numero Interior</th>
            <th scope="col">Colonia</th>
            <th scope="col">Codigo Postal</th>
            <th scope="col">Estado</th>
            <th scope="col">Municipio</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($direcciones as $direccion)
            <tr>
              <td>{{ $direccion->calle }}</td>
              <td>{{ $direccion->num_ext }}</td>
              <td>{{ $direccion->num_int }}</td>
              <td>{{ $direccion->colonia }}</td>
              <td>{{ $direccion->codigo_postal }}</td>
              <td>{{ $direccion->nombre_estado }}</td>
              <td>{{ $direccion->nombre }}</td>
              <td><a href="/agregar_direccion" class="btn btn-warning">Editar</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <a href="/agregar_direccion" class="btn btn-success">Agregar Direccion Nueva</a>
</div>
@stop
