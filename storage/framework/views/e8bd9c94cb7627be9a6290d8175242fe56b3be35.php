<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?php echo $__env->yieldContent('titleName'); ?>Artem</title>      
  
  <!-- MUDAR A COR DA ABA DO BOWSER -->
  
  <meta name="theme-color" content="#152928">
  <meta name="apple-mobile-web-app-status-bar-style" content="#152928">
  <meta name="msapplication-navbutton-color" content="#152928">

  <link rel="stylesheet" href="<?php echo e(asset('css/estilo.css')); ?>"> 
  
  <?php $__env->startSection('responsive'); ?>
  <!-- DEIXA O SITE RESPONSIVO -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="<?php echo e(asset('css/screen.css')); ?>">
  <?php echo $__env->yieldSection(); ?>
  <!-- ICONE DO SITE -->
  
  <link rel="icon" href=" <?php echo e(asset('img/icone.png')); ?> "> 
  
  <?php echo $__env->yieldContent('stylesheet'); ?>
 
 
 </head>
 <body> 
 	<header class="head" >
	 	<div class="header" >
		 	<img class="icon a" src="<?php echo e(asset('icon/music.png')); ?>">
		 	<A href="<?php echo e(route('home')); ?>"><h1>Artem</h1></a>
 			<img class="icon b" src="<?php echo e(asset('icon/music.png')); ?>">
 			<img class="icon c" src="<?php echo e(asset('icon/music.png')); ?>">
 			<img class="icon d" src="<?php echo e(asset('icon/music.png')); ?>">
 		</div>
 		<div class="linkBox">
 			
 			<?php echo $__env->yieldContent('link'); ?>
 			
 		</div>
 	</header>
 	
 	<?php $__env->startSection('content'); ?>
 	<section class="main">
 	<div class="container" >
 	   <?php echo $__env->yieldSection(); ?>
 	
 	</div>
 	</section>
 	
 	<?php $__env->startSection('footer'); ?>
 	<footer>
 		<div>
 			<h1>Artem</h1>
		 	<img class="icon e" src="<?php echo e(asset('icon/music.png')); ?>">
	 	</div>
 	
    	<hr>
 	
 		<div class="subFooter">
	 		<div class="footerIcon">
		 		<a class="icon" href=""><img src="<?php echo e(asset('icon/headset.png')); ?>"><p>Sobre Nós</p></a>
		 		<a class="icon" href=""><img src="<?php echo e(asset('icon/wallet.png')); ?>"><p>Segurança</p></a>
	 			<a class="icon" href=""><img src="<?php echo e(asset('icon/newspaper.png')); ?>"><p>Termos</p></a>
		 		<a class="icon" href=""><img src="<?php echo e(asset('icon/chat.png')); ?>"><p>Contatos</p></a>
 			</div>
 		</div>
 	</footer>
 	<?php echo $__env->yieldSection(); ?>
 	
 	<script src="<?php echo e(asset('jQuery/jquery3.4.1.js')); ?>"></script>
 	
 	
 	<script type="text/javascript" src="<?php echo e(asset('js/abrirTelas.js')); ?>"></script>
 	<script type="text/javascript" src="<?php echo e(asset('js/TELA.js')); ?>"></script>
 	<script type="text/javascript" src="<?php echo e(asset('js/validacao.js')); ?>"></script>
 	<?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH C:\tcc\Artem\resources\views/_template/main.blade.php ENDPATH**/ ?>