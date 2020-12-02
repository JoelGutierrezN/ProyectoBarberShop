@extends('layouts.master')
@section('titulo', 'Contacto')
@section('contenido')
<div class="contenedor">
  <div class="back_formulario">
    <form class="formulario">

      <div class="form-group">
        <label for="calle">Calle</label>
        <input type="text" class="form-control" id="calle">
      </div>

      <div class="form-group">
        <div class="form-row form-group text-right">

          <div class="col-md-2">
            <label for="num_ext">Num. Ext.</label>
          </div>

          <div class="col-md-3">
            <input type="num" class="form-control" id="num_ext">
          </div>

          <div class="col-md-2">
            <label for="num_int">Num. Int.</label>
          </div>

          <div class="col-md-3">
            <input type="num" class="form-control" id="num_int">
          </div>
        </div>

        <div class="form-group">
          <div class="form-row">

          <div class="col">
            <label for="colonia">Colonia</label>
            <input type="text" class="form-control" id="colonia">
          </div>

          <div class="col">
            <label for="codigo_postal">Codigo Postal</label>
            <input type="num" class="form-control" id="codigo_postal">
          </div>

          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">

          <div class="col">

            <label for="estado">Estado</label>
            <select name="estado" id="estado">

              <option value="" selected disabled>-Seleccionar-</option>

            </select>

          </div>

          <div class="col">

            <label for="municipio">Municipio</label>
            <select name="municipio" id="municipio">

              <option value="" selected disabled>-Seleccionar-</option>

            </select>

          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@stop
