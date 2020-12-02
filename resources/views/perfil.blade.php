@extends('layouts.master')
@section('titulo', 'Contacto')
@section('contenido')
<div class="contenedor bg-studiof">
  <div class="back_formulario">
    <form class="formulario">
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
        <input name="email" type="email" class="form-control" id="email" value="{{ $datos->email }}" disabled>
      </div>
      <div class="form-group">
        <label for="password">Cambiar Contraseña</label>
        <input name="password" type="password" class="form-control" id="password">
      </div>

      <div class="form-group">
        <a href="{{ route('logout') }}" class="btn btn-danger">Cerrar Sesion</a>
        <a href="" class="btn btn-primary">Guardar cambios</a>
      </div>
    </form>
  </div>
</div>
@stop
