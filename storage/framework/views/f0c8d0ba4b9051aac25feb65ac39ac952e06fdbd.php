<?php $__env->startSection('stylesheet'); ?>

   <link rel="stylesheet" href="<?php echo e(asset('css/evento/corpo.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
    <div class="topo" >
         <h1><?php echo e($evento['titulo']); ?></h1>
         
    </div>
    
    <div class="conteudo" >
    	<div class="descricao">
    		<p>
    			"<?php echo e($evento['descricao']); ?>"
    		</p>
    	</div>
    	
    	<div class="foto" >
    	    <div class="imgBox">
    	         <img src="<?php echo e(asset('uploads/eventos/'.$evento['img'])); ?>">   	    
    	    
    	    </div>
    	</div>
    	
   <div class="data" >
		<?php
			//2019-09-09 00:00:00

			// Inicio 

	   	    $iano = substr($evento['inicio'], 0, 4);
			$imes = substr($evento['inicio'], 5, 2);
			$idia = substr($evento['inicio'], 8, 2);

			$ih = substr($evento['inicio'], 11, 2);
			$im = substr($evento['inicio'], 14, 2);

			// Termino 

			$tano = substr($evento['termino'], 0, 4);
			$tmes = substr($evento['termino'], 5, 2);
			$tdia = substr($evento['termino'], 8, 2);

			$th = substr($evento['termino'], 11, 2);
			$tm = substr($evento['termino'], 14, 2);
		?>
    	
			 <div>
			    <h3>Começa: </h3>
				<h4><?php echo e($idia); ?> de <?php echo e($mesExtenco[$imes]); ?> de <?php echo e($iano); ?> </h4>
				<h4>às  <?php echo e($ih); ?>:<?php echo e($im); ?></h4>
				
			</div>
    	    <div>
				<h3>Termina: </h3>
				<h4><?php echo e($tdia); ?> de <?php echo e($mesExtenco[$tmes]); ?> de <?php echo e($tano); ?></h4>
			    <h4>às <?php echo e($th); ?>:<?php echo e($tm); ?></h4>

			</div>
    	</div> 
    
    
    <div class="btnBox" >
    
    </div>
    
    <div class="baixo" >
    
    </div>
    		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\meusapps\Artem\resources\views/Evento/evento.blade.php ENDPATH**/ ?>