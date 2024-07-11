<?php $__env->startSection('content'); ?>

    <div class="container container-bg formulario d-flex flex-column ">
       
        <h1>Titulo: <?php echo e($nota->titulo); ?></h1>
        
       <div>
        <p><?php echo e($nota->contenido); ?></p>

       
        </form>
    </div>
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pruky/projects/Prueba/resources/views/notas/show.blade.php ENDPATH**/ ?>