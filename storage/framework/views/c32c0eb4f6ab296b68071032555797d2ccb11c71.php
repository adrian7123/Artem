<?php $__env->startSection('responsive'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('titleName', 'Evento - '); ?>

<?php $__env->startSection('stylesheet'); ?>

   <link rel="stylesheet" href="<?php echo e(asset('css/evento/corpo.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
    <?php if($_criador): ?>
            <a href="<?php echo e(route('home.editar', $evento['id'])); ?>" >Editar</a>
            <form class="formLink" action="<?php echo e(route('home.destroy', $evento['id'])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" class="btnLink" value="Deletar">
            </form>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
    <div class="topo" style="background-image: url('<?php echo e(asset('uploads/eventos/'.$evento['img'])); ?>')" >
    </div>
    <div class="foto"  >
        <div class="imgBox">
            <img src="<?php echo e(asset('uploads/eventos/'.$evento['img'])); ?>">

        </div>
    </div>
    <div class="miniContainer">
    <div class="conteudo" >

    	<h1><?php echo e($evento['titulo']); ?></h1>

    </div>





    <div class="data" >

			    <div class="dia" >
			        <img class="date textBlack" src="<?php echo e(asset('img/icon/icon_date.png')); ?>" >
					<h5><?php echo e($idia); ?> de <?php echo e($mesExtenco[$imes]); ?> de <?php echo e($iano); ?>, <?php echo e($ih); ?>h -

				        <?php echo e($tdia); ?> de <?php echo e($mesExtenco[$tmes]); ?> de <?php echo e($tano); ?>, <?php echo e($th); ?>h</h5>
				</div>

				<div class="endereco textBlack" >
					<img class="gps" src="<?php echo e(asset('img/icon/icon_gps.png')); ?>" >
					<h5><?php echo e($endereco['rua']); ?>, <?php echo e($endereco['bairro']); ?> - <?php echo e($endereco['cidade']); ?>, <?php echo e($endereco['estado']); ?></h4>
				</div>

               <div class="endereco textBlack" >
                    <img class="gps" src="<?php echo e(asset('img/icon/icon_user.png')); ?>" >
                    <h5>PARTICIPANTES: <?php echo e($participantes); ?></h4>
                </div>


    </div>
        <div class="baixo" >
            <h2 class="textBlack" >Descrição do Evento</h2>
            <div class="descricao">
                <p id="desc" data-valor="" >
                    <?php echo e($descricao); ?>



                </p>
            </div>
            <div class="autor" >
                <h3 class="textBlack">Por: <span class="textFino" ><?php echo e($evento['autor']); ?></span></h3>

            </div>
        </div>

            <div class="btnBox"  >
                <?php if($consulta): ?>
                    <a style="display:<?php echo e(!$_criador ? '' : 'none'); ?>" href="<?php echo e(route('participar', $evento['id'])); ?>" class="btn blue large white" >Participar</a>
                <?php else: ?>
                    <a style="display:<?php echo e(!$_criador ? '' : 'none'); ?>; background: #ff0000;" class="btn large white" href="<?php echo e(route('deletarParticipacao', $consultaId )); ?>">Cancelar</a>

                <?php endif; ?>

            </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/sdcard0/.aTCC/Artem/resources/views/Evento/evento.blade.php ENDPATH**/ ?>