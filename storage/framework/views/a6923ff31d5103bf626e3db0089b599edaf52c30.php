<?php $__env->startSection('titleName', 'Perfil - '); ?>

<?php $__env->startSection('responsive'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/evento.css')); ?>" >
	<link rel="stylesheet" href="<?php echo e(asset('css/usuario/corpo.css')); ?>" >
	
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
    <div></div>
    <a href="<?php echo e(route('logOut')); ?>">Sair</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
     <div class="topo" >
     	<h1 class="gray" >Minha Conta</h1>
     	
     </div>
     <div class="baixo" >
     	<div class="esquerda" >
     		<h2 class="textBlack" >Dados da Conta</h2>
     		
     		<div class="dado" >
     			<h3 class="textBlack" >Nome</h3>
     			<div class="fakeInput">
     		    	<?php echo e($user['nome']); ?>

     			</div>
     		</div>
     		
     		<div class="dado" >
     			<h3 class="textBlack">Email</h3>
         	    <div class="fakeInput">
     		         <?php echo e($user['email']); ?>

     	        </div>
 	  	   	</div>
     		
     		<div class="dado" >
     			<h3 class="textBlack">Senha</h3>
     			<div class="fakeInput">
     	    		•••••••
     			</div>
     		</div>
     		
     		<div class="btnBox">
     			<a class="btn white large blue" href="<?php echo e(route('editarUsuario')); ?>"  >Editar Dados Pessoais</a>
     		</div>
     	</div>
     	<div class="direita" >
     		<h2 class="textBlack" >Seus Eventos</h2>
     		
     		<div class="eventoBox">
     			<?php if($eventos != ''): ?>
 	    			<?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	 				<a href="<?php echo e(route('home.show', $evento['id'])); ?>">
   	  					<div class="evento" style="background-image: url('<?php echo e(asset('uploads/eventos/'.$evento['img'])); ?>')" > 
    	 					<div class="verMais">
     							<p>Ver +</p>
  		   					</div>
     						<div class="eventoBottom">
  		 	 	 				<h2><?php echo e($evento['titulo']); ?></h2>
	    	 				</div>
     		
     					</div>
  		   				</a>
     				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     			<?php endif; ?>
     		
     		</div>  
     		
     	</div>
     </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?><?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/sdcard0/.aTCC/Artem/resources/views/Usuario/UsuarioPerfil.blade.php ENDPATH**/ ?>