@include('includes.header')

<!--Cuerpo de la pagina-->
<div class="card text-white f-negro-claro">

    <!--Header-->
    <header>
        @include('includes.navegacion')
    </header>

    <!--Carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('img/prueba.png') }}" class="d-block w-100" alt="..." height="350px">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/prueba.png') }}" class="d-block w-100" alt="..." height="350px">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/prueba.png') }}" class="d-block w-100" alt="..." height="350px">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/prueba.png') }}" class="d-block w-100" alt="..." height="350px">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/prueba.png') }}" class="d-block w-100" alt="..." height="350px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--Contenido-->
    <div class="container">
        <main role="main" class="flex-Shrink-0">
            <div class="container contenedor-titulos">
                <p class="Titulo">Studio F BarberShop</p>
                <div class="contenedor-subtitulo container">
                    <p class="Subtitulo">Lo mejor del pais</p>
                </div>
            </div>
        </main>
    </div>
</div>
@include('includes.footer')
