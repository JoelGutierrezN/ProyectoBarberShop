<?php $__env->startSection('titulo', 'Inicio'); ?>

<?php $__env->startSection('contenido'); ?>
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
            <img src="<?php echo e(asset('img/prueba.png')); ?>" class="d-block w-100" alt="..." height="350px">
            </div>
            <div class="carousel-item">
            <img src="<?php echo e(asset('img/prueba.png')); ?>" class="d-block w-100" alt="..." height="350px">
            </div>
            <div class="carousel-item">
            <img src="<?php echo e(asset('img/prueba.png')); ?>" class="d-block w-100" alt="..." height="350px">
            </div>
            <div class="carousel-item">
            <img src="<?php echo e(asset('img/prueba.png')); ?>" class="d-block w-100" alt="..." height="350px">
            </div>
            <div class="carousel-item">
            <img src="<?php echo e(asset('img/prueba.png')); ?>" class="d-block w-100" alt="..." height="350px">
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

    <!--Boton de Agendar cita-->
    <div class="container">
        <main role="main" class="contenedor contenedor-titulos">
            <div class="contenedor-vertical">
                <a href="#" class="link boton-agendar">Agenda Tu Cita Ahora</a>
            </div>
        </main>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoBarberShop\resources\views/bienvenida.blade.php ENDPATH**/ ?>