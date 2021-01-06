

<?php $__env->startSection('titleName', 'Perquisar - '); ?>

<?php $__env->startSection('responsive'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('stylesheet'); ?>

   <link rel="stylesheet" href="<?php echo e(asset('css/pesquisa/corpo.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('css/evento.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>        
	##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
	
	
	
	<div class="pesquisaBox">
	     <form action="<?php echo e(route('pesquisar')); ?>" method="POST" onsubmit="return validaPesquisa()">
           <?php echo csrf_field(); ?>
	         <input id="pesq" class="inputPesquisa" type="text" placeholder="pesquisar eventos..." name="pesquisa" value="<?php echo e(isset($pesquisa) ? $pesquisa : ''); ?>">
	         <button class="blue btn imgbtn" type="submit"><img class="imgIcon" src="<?php echo e(asset('icon/lupa.png')); ?>"></button>
	     </form>
	     <label id="warPesq" class="war"></label>
	
	</div>
	
	<?php if(count($eventos) > 0): ?>
    <div class="eventoBox">         
         
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
     </div>  
     <?php else: ?>
         <h1 class="textBlack">Nenhum evento encontrado</h1>
     <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?><?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/sdcard0/.aTCC/Artem/resources/views/Evento/pesquisa.blade.php ENDPATH**/ ?>