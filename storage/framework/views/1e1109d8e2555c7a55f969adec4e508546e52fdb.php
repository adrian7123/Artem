

<?php $__env->startSection('titleName', 'Cadastro - '); ?>
<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/cadastro/corpo.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
	<div></div>
	<a href="login" >Login</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
		##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
		<div>
  		<h1 class="gray">Cadastro</h1>
    	<h3>Por favor preencha os campos abaixo</h3>
    	
    	<br>
    	
    	<form action="<?php echo e(route('store')); ?>" method="post" onsubmit="return valida()" >
    	    <?php echo csrf_field(); ?>
    		<div class="formBox" >
    		<!-- Nome  -->
    		<input id="nome" value="<?php echo e($nome); ?>"  class=" all" type="text" name="nome" placeholder="Nome de Usuario">
    	    <label id="nomes"  class="war " >Por favor informe o nome* </label>
    	
   		 	<!-- Nacionalidade -->
   		 	<label>Estado</label>
   			<select class="all" name="estado">
					<option selected>SP</option>
					<option>RJ</option>
					<?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					     <option><?php echo e($estado); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				</select>

    		<!-- E-mail -->
    		<input id="email" class=" all" type="email" name="email" value="<?php echo e($email); ?>" placeholder="Email">
    		<label id="emails"  class="war " >Por favor informe o E-mail*</label>
    	  <label class="war" style="<?php echo e($erroEmail); ?>">Email já cadastrado</label>
    
    		<!-- Senha -->
    		<div class="senhaBox all" >
    			<input id="senha"  class="all" type="password" name="senha" placeholder="Senha">	
    			<input id="confirmSenha"  class="all" type="password" placeholder="Confirme a senha">
    		</div>
    		<label id="senhas"  class="war " >Dados incorretos</label>
    		   	
    		<label><input id="userTermo"  type="checkbox"> Concordo com os <a class="textBlue" href="Index.html" >termos de uso</a>.</label>
    		<label id="termos" class="war " >Confirme os termos de uso para poder avançar</label>
    		
    		</div>
    		<br>
    		
    		<div class="btnBox" >
    			<input class="btn large blue" type="submit" value="Cadastrar" >
   		  	</div>
   		  	
			 </form>
		</div>

		<div>
			<img class="icon iconGrande" src="<?php echo e(asset('img/Musical-Notes-PNG.png')); ?>">


		</div>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/sdcard0/.aTCC/Artem/resources/views/Auth/cadastro.blade.php ENDPATH**/ ?>