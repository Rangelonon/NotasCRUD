
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notas App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-colors/dist/bootstrap-colors.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>


    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="footer">
        <?php echo $__env->yieldContent('footer'); ?>
    </div>


</body>
</html><?php /**PATH /home/pruky/projects/Prueba/resources/views/layout/layout.blade.php ENDPATH**/ ?>