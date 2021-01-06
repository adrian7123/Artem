<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/usuario/corpo.css')); ?>" >

<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
    <div></div>
    <a href="<?php echo e(route('logOut')); ?>">Sair</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
     <div class="topo" >
     	
     
     </div>
     <div class="baixo" >
     
     </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?><?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\meusapps\Artem\resources\views/Usuario/UsuarioPerfil.blade.php ENDPATH**/ ?>