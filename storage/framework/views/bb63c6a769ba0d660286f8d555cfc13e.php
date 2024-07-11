<head>
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>

<div class="navbarposition">
    <header> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo e(route('notas.nota')); ?>"><i class="fa-regular fa-note-sticky" style="color: #FFD43B;"></i> Notas</a>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('notas.create')); ?>">CREATE</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('notas.nota')); ?>">READ</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" href="">UPDATE</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" href="  ">DELETE</a>
                  </li>
    
                </ul>
            </div>
            </div>
          </nav>
    </header>
</div>
    <?php /**PATH /home/pruky/projects/Prueba/resources/views/layout/navbar.blade.php ENDPATH**/ ?>