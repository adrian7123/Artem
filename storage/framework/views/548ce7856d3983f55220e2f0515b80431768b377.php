<?php $__env->startSection('titleName', 'Login - '); ?>
<?php $__env->startSection('stylesheet'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/login/corpo.css')); ?>"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
    <div></div>
    <a href="<?php echo e(route('cadastro')); ?>">Cadastre-se</a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
    	<form action="<?php echo e(route('logar')); ?>" method="post" onsubmit="return validaLogin()">
    	   <?php echo csrf_field(); ?>
   			<div class="warBox"  style="<?php echo e($erroLogin); ?>">
   				<h4 style="color: white;">Login ou Senha Incorretos</h4>
   			</div>
   			
   			<h1 class="gray">Entrar</h1>
    	  	<h3>Digite seus dados para acessar sua conta.</h3>
    		
    	
    		<input id="email" value="<?php echo e($email); ?>" name="email"  class="all inputGrande"  type="email" placeholder="Email" >
    		<label id="emails" class="war" >informe o e-mail*</label>
    		
    		<input id="senha" name="senha" class="all inputGrande"  type="password" placeholder="Senha"  >
    		<label id="senhas" class="war" >informe a senha*</label>
    	
    		
    		<a class="textBlue small"  href="<?php echo e(route('esqueceuSenha')); ?>" >Esqueceu a senha? </a>
    		<br><br>
    		
    		<div class="btnBox" >
    			<input class="btn large blue" type="submit" value="Entrar">
   		  	</div>
   	   </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/adrian/_Dev/php/Artem/resources/views/Auth/login.blade.php ENDPATH**/ ?>