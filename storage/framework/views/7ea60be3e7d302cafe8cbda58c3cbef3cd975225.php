  
<?php $__env->startSection('titleName', 'Home - '); ?>
<?php $__env->startSection('stylesheet'); ?>  

  <link rel="stylesheet" href="<?php echo e(asset('css/home/corpo.css')); ?>">  
  <link rel="stylesheet" href="<?php echo e(asset('css/evento.css')); ?>" >
<!--  <link rel="stylesheet" href="<?php echo e(asset('css/Gallery/gallery.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/Gallery/gallery.theme.css')); ?>"> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>    	
    <a id="criarE" href="<?php echo e(route('criarEvento')); ?>" >Publicar Evento</a>
   	<a id="user" href="<?php echo e(route('usuario')); ?>">Usuario</a>

<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
     <div class="topo">
       <div class="esquerda" >
         <h2 class="textBlue" >A onde um evento leva</h2>
                    <h2 class="textBlue fim" >a OUTRO...</h2>
       </div>  
       <div class="direita" >
           <form action="<?php echo e(route('pesquisar')); ?>" method="POST" onsubmit="return validaPesquisa()">
               <?php echo csrf_field(); ?>
               <input id="pesq" class="inputPesquisa" type="text" placeholder="pesquisar eventos..." name="pesquisa">
               <button class="blue btn imgbtn" type="submit"><img class="imgIcon" src="<?php echo e(asset('icon/lupa.png')); ?>"></button>
           </form>
           <label id="warPesq" class="war"></label>
       </div>
       
     </div>
     
     <div class="centro">
         <div class="esquerda" >
        	<img src="<?php echo e(asset('img/evento/default_evento.jpg')); ?>" >        
            <section class="terceiro">    
                 <h3 class="Black">Publique um evento você mesmo: </h3>
                 <a class="btn blue" href="<?php echo e(route('criarEvento')); ?>" >Publicar Evento</a>
            </section>
         </div>
         <div class="direita" >
         	<h2 class="textBlue" >Próximos Eventos...</h2>
         </div>
     </div>
     <div class="porcento" >
         <h2 class="textBlue" >Aproveite 220% de TUDO</h2>
     </div>
     
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\Artem\resources\views/Evento/home.blade.php ENDPATH**/ ?>