<?php $__env->startSection('content'); ?>

    <div class="container formulario ">
        <form action="<?php echo e(route('notas.update', $nota->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!--Cuadro titulo-->
            <div class="mb-3">
                <label for="txtTitulo" class="form-label"><strong>Titulo:</strong></label>
                <input type="text" name="titulo" id="form-control <?php $__errorArgs = ['titulo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="txtTitulo" value="<?php echo e(old('titulo',$nota->titulo)); ?>"> 
            </div>
    
            <!--Cuadro contenido-->
            <div class="mb-3"  style="margin-left: 3px">
                <label for="txtContenido" class="form-label" ><strong>Contenido:</strong></label>
                <textarea class= "mx-auto" rows="10" cols="26" type="textarea" name="contenido" id="form-control <?php $__errorArgs = ['contenido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        id="txtContenido" placeholder="Ingresa Contenido" ><?php echo e(old('contenido', $nota->contenido)); ?></textarea>
            </div>

            <button type="submit" class="btn btn-light" style="box-shadow: 5px 5px 10px rgb(156, 156, 156);"><i class="fa-solid fa-file" style="margin-right: 5px; " ></i>Editar</button>
        </form>
    </div>
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pruky/projects/Prueba/resources/views/notas/edit.blade.php ENDPATH**/ ?>