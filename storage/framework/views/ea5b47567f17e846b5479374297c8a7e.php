<?php $__env->startSection('content'); ?>


<div class = "mt-5 container d-flex flex-wrap justify-content-between ">

    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert"><?php echo e(session ('success')); ?></div>
    <?php endif; ?>

    <table class = "table table-bordered content-table">
        <thead>
            <tr class="table-warning" style="">
                <th>ID</th>
                <th>Titulo</th>
                <th>Contenido</th>
                <th width="280px">Acciones</th>
            </tr>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($nota->id); ?></td>
                    <td><?php echo e($nota->titulo); ?></td>
                    <td><?php echo e($nota->contenido); ?></td>
                    
                    <td>
                        <div class="btn-group" aria-label="Basic mixed styles">
                            <form action="<?php echo e(route('notas.destroy', $nota->id)); ?>" method = "POST">
                                <a class="btn btn-info btn-sm" href="<?php echo e(route('notas.show', $nota->id)); ?>"><i class="fa-solid fa-list"></i>Mostrar</a>
                                <a class ="btn btn-primary btn-sm" href="<?php echo e(route('notas.edit', $nota->id)); ?>"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td>No hay informacion</td>
                </tr>
            <?php endif; ?>
        </tbody>
        </thead>
    </table>

    <?php echo e($notas->links()); ?>


<!--Boton de crear-->
<a class="btn align-self-center" style="background-color: rgb(241, 216, 113)"  href="<?php echo e(route('notas.create')); ?>">Crear Nota</a>


    
</div>  
   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pruky/projects/Prueba/resources/views/notas/nota.blade.php ENDPATH**/ ?>