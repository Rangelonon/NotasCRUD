<?php $__env->startSection('content'); ?>


<div class="container position-absolute top-50 start-50 translate-middle">
    <h1 class="text-center">Bienvenido</h1>

    <div class="d-grid col-4 mx-auto">
        <a class = "btn btn-sm border border-dark" style="background-color: rgb(255, 242, 141)" href="<?php echo e(route('notas.nota')); ?>">Ir a Notas</a>
    </div>
</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pruky/projects/Prueba/resources/views/welcome.blade.php ENDPATH**/ ?>