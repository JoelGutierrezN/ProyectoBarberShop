@extends('layouts.master')

@section('titulo', 'Citas')
@section('contenido')

<div class="contenedor">
  <div class="back_formulario">
    <form class="formulario">
      <div class="form-group">
        <p class="Subtitulo text-center text-white">Cita para {{ $user->nombre }}</p>
        <p class="text-center text-white">Ticket No. {{$tickets->id +1}}</p>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Hora</label>
        <input type="time" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group">
        <label for="tipo_servicio">Tipo de Servicio</label>
        <select class="form-control form-control-sm" name="tipo_servicio" id="tipo_servicio">
          <option value="" selected disabled>-Seleccionar-</option>
          <option value="Establecimiento">Atencion en Establecimiento</option>
          <option value="Domicilio">Atención a Domicilio</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tipo_servicio">Elige tu Servicio</label>
        <select class="form-control form-control-sm" name="tipo_servicio" id="tipo_servicio">
          <option value="" selected disabled>-Seleccionar-</option>
          @foreach ($servicios as $servicio)
            <option value="{{ $servicio->id }}">{{ $servicio->nombre_servicio }} ${{ $servicio->costo }}</option>
          @endforeach
        </select>
      </div>
      <div class="contenedor">
        <button type="submit" class="btn btn-primary">Reservar</button>
      </div>
    </form>
  </div>
</div>
@stop
