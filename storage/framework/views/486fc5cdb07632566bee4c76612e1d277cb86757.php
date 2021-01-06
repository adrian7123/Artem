<?php $__env->startSection('stylesheet'); ?>

   <link rel="stylesheet" href="<?php echo e(asset('css/esqueceuSenha/corpo.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
    		<div class="esquerda" >
				<h1>Recuperar sua senha</h1>
				<p><span>Sua senha sera enviada para seu email</span><br>
		      <br>
				Por favor insira seu endereço de E-mail</p>
				<input class="inputGrande"  type="email" placeholder="Email">			
				
			</div>
			
			<div class="direita" >		
				<input class="btn large blue"  type="submit" value="Confirmar" >
			</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/sdcard0/.aTCC/Artem/resources/views/Auth/esqueceuSenha.blade.php ENDPATH**/ ?>