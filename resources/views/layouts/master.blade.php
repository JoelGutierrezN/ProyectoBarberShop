<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Imports de archivo head.blade.php -->
    @section('head')
        @include('includes.head')
    @show
</head>
<body class="f-negro-claro">

    <!-- Barra de navegacion del archivo navegacion.blade.php -->
    @section('navegacion')
        @include('includes.navegacion')
    @show

    <!-- Contenidos de la pagina -->
        @yield('contenido')

    <!-- footer del archivo footer.blade.php -->
    @section('footer')
        @include('includes.footer')
    @show
    
</body>
</html>