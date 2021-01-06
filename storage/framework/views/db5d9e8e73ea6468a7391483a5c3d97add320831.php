

<?php $__env->startSection('titleName', 'Editar Perfil - '); ?>

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/cadastro/corpo.css')); ?>">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
		##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
		<div>
  		<h1 class="gray">Editar Perfil</h1>
    	<h3>Edite seus Dados pessoais</h3>
    	
    	<br>
    	
    	<form id="formAjax"  action="<?php echo e(route('updateUsuario', $user['id'])); ?>" method="POST" onsubmit="return validaEdit()" >
    	    <?php echo csrf_field(); ?>
    		<div class="formBox" >
    		<!-- Nome  -->
    		<input id="nome" value="<?php echo e($user['nome']); ?>"  class=" all" type="text" name="nome" placeholder="Nome de Usuario">
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
    		<input id="email" class=" all" type="email" name="email" value="<?php echo e($user['email']); ?>" placeholder="Email">
    		<label id="emails"  class="war " >Por favor informe o E-mail*</label>
    	    <label class="war" style="<?php echo e($erroEmail); ?>">Email já existe</label>
    
    		<!-- Senha -->
    		
    		<h3>Editar Senha <br> (Obs: Não preencha esses campos se você não pretende mudar sua senha)</h3>
    		
    		<input id="senhaVelha" class="all" type="password" name="senhaVelha" placeholder="Informe a sua senha antiga" >
    		<label style="color: red" ><?php echo e(isset($senhaErr) ? $senhaErr : ''); ?></label>
    		
    		
    		<div class="senhaBox all" >
    		  	<input id="senha"  class="all" type="password" name="senha" placeholder="Nova Senha">	
    			<input id="confirmSenha"  class="all" type="password" placeholder="Confirme sua senha">
    		</div>
    		<label id="senhas"  class="war " >Dados incorretos</label>
    		   	
    		
    		</div>
    		<br>
    		
    		<div class="btnBox" >
    			<input class="btn large blue" type="submit" value="Salvar" >
   		  	</div>
   		  	
			 </form>
		</div>

	
		
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(asset('jQuery/formAjax.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/adrian/_Dev/php/Artem/resources/views/Usuario/edit.blade.php ENDPATH**/ ?>