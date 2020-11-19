@extends('layouts.master')
@section('titulo', 'Iniciar Sesión')
@section('contenido')
<div class="contenedor">
  <div class="back_formulario">
    <form class="formulario">
        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="pasword">Contraseña</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="contenedor">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
        <div class="form-group form-check contenedor">
            <a href="">¿Aún no tienes une cuenta? ¡Registrate Ahora!</a>
        </div>
    </form>
  </div>
</div>
@stop
@section('footer')
@stop