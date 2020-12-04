@extends('layouts.master')
@section('titulo', 'Contacto')
@section('contenido')
<div class="contenedor bg-studiof">
  <div class="back_formulario">
    <form class="formulario" action="/actualizar_perfil">
      <input name="id" type="hidden" class="form-control" id="id" value="{{ $datos->id }}">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="nombre" value="{{ $datos->nombre }}">
      </div>
      <div class="form-group">
        <label for="apellid_paterno">Apellido Paterno</label>
        <input name="apellido_paterno" type="text" class="form-control" id="apellido_paterno" value= "{{ $datos->apellido_paterno }}">
      </div>
      <div class="form-group">
        <label for="apellido_materno">Apellido Materno</label>
        <input name="apellido_materno" type="text" class="form-control" id="apellido_materno" value="{{ $datos->apellido_materno }}">
      </div>
      <div class="form-group">
        <label for="edad">Edad</label>
        <input name="edad" type="text" class="form-control" id="edad" value="{{ $datos->edad }}">
      </div>
      <div class="form-group">
        <label for="email">Correo</label>
        <input name="email" type="email" class="form-control" id="email" value="{{ $datos->email }}" readonly>
      </div>
        <input name="password" type="hidden" class="form-control" id="password" value ="{{ $datos->password }}">  
      <div class="form-group">
        <a href="{{ route('logout') }}" class="btn btn-danger">Cerrar Sesion</a>
        <input class="btn btn-primary" type="submit" value="Guardar Cambios">
      </div>
    </form>
  </div>
</div>
@stop
