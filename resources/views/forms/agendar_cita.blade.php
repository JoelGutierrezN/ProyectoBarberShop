@extends('layouts.master')

@section('titulo', 'Citas')
@section('contenido')
<div class="contenedor">
  <div class="back_formulario">
    <form class="formulario">
      <div class="form-group">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Hora</label>
        <input type="time" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group form-check servicios_list">
        <div class="contenedor servicios_check">

          <div class="servicio_check">
            <input class="form-check-input" type="checkbox" name="peinado" id="peinado">
            <label class="form-check-label" for="peinado">Peinado</label>
            <p class="form-check-label">...$500</p>
          </div>

          <div class="servicio_check">
            <input class="form-check-input" type="checkbox" name="corte_caballero" id="corte_caballero">
            <label class="form-check-label" for="corte_caballero">Corte de Caballero</label>
            <p class="form-check-label">...$500</p>
          </div>

          <div class="servicio_check">
            <input class="form-check-input" type="checkbox" name="corte_dama" id="corte_dama">
            <label class="form-check-label" for="corte_dama">Corte de Dama</label>
            <p class="form-check-label">...$500</p>
          </div>
          
          <div class="servicio_check">
            <input class="form-check-input" type="checkbox" name="tinte" id="tinte">
            <label class="form-check-label" for="tinte">Aplicacion de Tinte</label>
            <p class="form-check-label">...$500</p>
          </div>

        </div>

        <div class="contenedor servicios_check">

          <div class="servicio_check">
            <input class="form-check-input" type="checkbox" name="manicure" id="manicure">
            <label class="form-check-label" for="manicure">Manicure</label>
            <p class="form-check-label">...$500</p>
          </div>

          <div class="servicio_check">
            <input class="form-check-input" type="checkbox" name="corte_de_barba" id="corte_de_barba">
            <label class="form-check-label" for="corte_de_barba">Corte de Barba</label>
            <p class="form-check-label">...$500</p>
          </div>

          <div class="servicio_check">
            <input class="form-check-input" type="checkbox" name="tratamiento_de_barba" id="tratamiento_de_barba">
            <label class="form-check-label" for="tratamiento_de_barba">Tratamiento de barba</label>
            <p class="form-check-label">...$500</p>
          </div>

          <div class="servicio_check">
            <input class="form-check-input" type="checkbox" name="deshidratacion" id="deshidratacion">
            <label class="form-check-label" for="deshidratacion">Deshidratacion</label>
            <p class="form-check-label">...$500</p>
          </div>

        </div>
      </div> 
      <div class="contenedor">
        <button type="submit" class="btn btn-primary">Reservar</button>
      </div>
    </form>
  </div>
</div>
@stop
