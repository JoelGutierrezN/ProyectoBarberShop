<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!-- Imports de archivo head.blade.php -->
    <?php $__env->startSection('head'); ?>
        <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
</head>
<body class="f-negro-claro">

    <!-- Barra de navegacion del archivo navegacion.blade.php -->
    <?php $__env->startSection('navegacion'); ?>
        <?php echo $__env->make('includes.navegacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldSection(); ?>

    <!-- Contenidos de la pagina -->
        <?php echo $__env->yieldContent('contenido'); ?>

    <!-- footer del archivo footer.blade.php -->
    <?php $__env->startSection('footer'); ?>
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\ProyectoBarberShop\resources\views/layouts/master.blade.php ENDPATH**/ ?>