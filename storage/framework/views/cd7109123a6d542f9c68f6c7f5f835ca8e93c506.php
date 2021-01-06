<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/index/corpo.css')); ?>" 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
	<a id="cadastro" href="cadastro">Cadastre-se</a>
	<a id="login" href="login">Entrar</a>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
		##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
		<div class="textBox" >
        	<h2>Os Melhores Eventos da Sua cidade <br>
					você encontra aqui no Artem!! </h2>
		</div>
		
       <div class="btnBox">
         <a href="home" class="btn large blue" name="button">Veja Aqui</a>
       </div>

     </div>
 
 <?php $__env->stopSection(); ?>
      
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\meusapps\Artem\resources\views/Artem/index.blade.php ENDPATH**/ ?>