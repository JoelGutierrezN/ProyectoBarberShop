@extends('layouts.master')

@section('titulo', 'Citas')
@section('contenido')

<div class="contenedor">
  <div class="back_formulario">
    <form class="formulario" method="post" action="{{ action('BDController@insertar_cita') }}">
    {{ csrf_field() }}
      <div class="form-group">
        <p class="Subtitulo text-center text-white">Cita para {{ $user->nombre }}</p>
        <input type="hidden" name="num_factura" id="num_factura" value="{{ $tickets->id +1}}">
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <p class="text-center text-white">Ticket No. {{$tickets->id +1}}</p>
      </div>
      <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" class="form-control" id="fecha" name="fecha">
      </div>
      <div class="form-group">
        <label for="hora">Hora</label>
        <input type="time" class="form-control" id="hora" name="hora">
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
        <label for="direccion_id">Elige la direccion</label>
        <select class="form-control form-control-sm" name="direccion_id" id="direccion_id">
          <option value="" selected disabled>-Seleccionar-</option>
          @foreach($direcciones as $direccion)
          <option value="{{ $direccion->id }}">{{ $direccion->calle." ext.".$direccion->num_ext. ", int. ". $direccion->num_int. " ". $direccion->colonia. ", ". $direccion->nombre. ", ". $direccion->nombre_estado}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="servicio_id">Elige tu Servicio</label>
        <select class="form-control form-control-sm" name="servicio_id" id="servicio_id">
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
