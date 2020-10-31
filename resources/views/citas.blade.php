@extends('layouts.master')

@section('titulo', 'Citas')
<!DOCTYPE html>
<div class="main">
  <!--MAIN-container-->
  <div class="container">
    <h2>Citas Barber Shop Estudio F</h2>
    <form action="mail.php" enctype="multipart/form-data" method="post" name="formulario_html5" autocomplete="off">
      <label for="nombre">Nombre</label></br>
      <input type="text" name="nombre" id="nombre" class="cajas"></br>
    
      <label for="email">Email</label></br>
      <input type="email" name="email" id="email" class="cajas"></br>

<label for="telefono">Teléfono</label></br>
      <input type="number" name="telefono" id="telefono" class="cajas"></br>
      
      <label for="llegada">Fecha de cita</label></br>
      <input type="datetime-local" id="llegada" name="fecha-hora-llegada" class="cajas">
      </br>
   
      
      <input type="submit" value="Enviar" name="submit" class="btn">

</form>
