@extends('layouts.master')
@section('titulo', 'Contacto')
@section('contenido')
<div class="contenedor">
  <div class="back_formulario">
    <form class="formulario">
      <div class="form-group">
        <label for="razon">Razon o Motivo</label>
        <input type="text" class="form-control" id="razon" placeholder="Ej. Mejores Proveedores para usted">
      </div>
      <div class="form-group">
        <label for="urgencia">Urgencia</label>
        <select class="form-control" name="urgencia" id="urgencia">
          <option value="Alta">ALTA | 1-3 dias</option>
          <option value="Media" selected>MEDIA | 1 semana</option>
          <option value="Baja">BAJA | 2 semanas o más</option>
        </select>
      </div>
      <div class="form-group">
        <label for="texto">Descripcion del asunto</label>
        <textarea class="form-control" id="texto" rows="10"></textarea>
      </div>
      <div class="form-group">
        <label for="archivo">Archivo de apoyo</label>
        <input type="file" class="form-control-file" id="archivo">
      </div>
      <div class="contenedor">
        <button type="submit" class="btn btn-primary">Enviar Petición</button>
      </div>
    </form>
  </div>
</div>
@stop
