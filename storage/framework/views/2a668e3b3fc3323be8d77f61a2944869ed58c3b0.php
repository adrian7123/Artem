<?php $__env->startSection('titleName', 'Editar Evento - '); ?>

<?php $__env->startSection('responsive'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('stylesheet'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/evento/corpo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/edit/corpo.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
    <form id="formAjax"  action="<?php echo e(route('home.update', $evento['id'])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="containe">
    <div class="topo" style="background-image: url('<?php echo e(asset('uploads/eventos/'.$evento['img'])); ?>')">
    </div>
    <div class="foto"  >
        <div class="imgBox">
            <img src="<?php echo e(asset('uploads/eventos/'.$evento['img'])); ?>">

        </div>
    </div>

    <div class="miniContainer">
        <div class="conteudo" >

        <input name="titulo" class="inputTitulo" type="text" value="<?php echo e($evento['titulo']); ?>">
        <label id="warTitulo"  class="war"></label>
       </div>


        <div class="data" >

            <h2 class="textBlack" >Endereco</h2>

            <h3>Buscar pelo CEP(obs: buscando o CEP de sua cidade ele preenche automaticamente os campos) </h3>

            <div class="inputBox" >
                <input class="inputGrande" type="number" value="<?php echo e(isset($valueCep) ? $valueCep : ''); ?>" id="cep" name="cep"  placeholder="Ex. 18400000">
                <button id="buscarCep" name="buscarCep"  class="blue btn imgbtn" type="button" value="true">
                    <img class="imgIcon" src="<?php echo e(asset('icon/lupa.png')); ?>"></button>
            </div>            

            <h3>Atualize o endereço do evento</h3>
            <label>cidade</label>
            <input id="cidade" class="inputGrande"  type="Text" name="cidade" value="<?php echo e(isset($endereco['cidade']) ? $endereco['cidade'] : ''); ?>" >
            <label id="warCidade"  class="war" ></label>

            <label>bairro</label>
            <input id="bairro"  class="inputGrande"  type="Text" name="bairro" value="<?php echo e(isset($endereco['bairro']) ? $endereco['bairro'] : ''); ?>">
            <label id="warBairro"  class="war" ></label>

            <label>Rua</label>
            <input id="rua"  class="inputGrande"  type="Text" name="rua" value="<?php echo e(isset($endereco['rua']) ? $endereco['rua'] : ''); ?>">
            <label id="warRua"  class="war" ></label>


            <label>estado</label>
            <select class="inputGrande" name="estado">
                <option <?php echo e(isset($cep['uf']) && $cep['uf'] == 'SP' ? 'selected' : ''); ?> >SP</option>
                <option <?php echo e(isset($cep['uf']) && $cep['uf'] == 'RJ' ? 'selected' : ''); ?> >RJ</option>
                <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option  <?php echo e(isset($cep['uf']) && $cep['uf'] == $estado ? 'selected' : ''); ?> ><?php echo e($estado); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <div class="data">
                <h2 class="textBlack" >Data</h2>

                <div class="contain">
                    <p>Atualize a data de realização do evento</p>

                    <div class="inputBox">

                        <div class="msm">
                            <h3>Dia de inicio:</h3>
                            <div class="inputIcon">
                                <img  src="<?php echo e(asset('img/icon/icon_date.png')); ?>">
                                <input id="idata"  type="date" value="<?php echo e(isset($data) ? $data : $dataInit); ?>" name="dataInit">
                            </div>
                        </div>

                        <div class="msm">
                            <h3>Hora de início:</h3>
                            <div class="inputIcon">
                                <img  src="<?php echo e(asset('img/icon/icon_time.png')); ?>">
                                <input id="ihora" type="time" value="<?php echo e(isset($hora) ? $hora : $horaInit); ?>" name="horaInit">

                            </div>
                        </div>

                        <div class="msm">
                            <h3>Dia de termino:</h3>
                            <div class="inputIcon">
                                <img  src="<?php echo e(asset('img/icon/icon_date.png')); ?>">
                                <input id="tdata" type="date" value="<?php echo e(isset($data) ? $data : $dataTerm); ?>" name="dataTerm">

                            </div>
                        </div>

                        <div class="msm">
                            <h3>Hora de termino:</h3>
                            <div class="inputIcon">
                                <img  src="<?php echo e(asset('img/icon/icon_time.png')); ?>">
                                <input id="thora"  type="time" value="<?php echo e(isset($hora) ? $hora : $horaTerm); ?>" name="horaTerm">

                            </div>
                        </div>

                    </div>
                    <label id="warData"  class="war" ></label>

                </div>


        </div>

        <div class="baixo" >
            <h2 class="textBlack" >Descrição do Evento</h2>
            <div class="descricao">
                <textarea name="descricao" id="desc" rows="10" >
                    <?php echo e($descricao); ?>



                </textarea>
            </div>

        </div>

        <div class="btnBox"  >


                <input type="submit" class="white btn blue large" value="Salvar">



        </div>

    </div>
        </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('jQuery/buscarCep.js')); ?>"></script>
    <script src="<?php echo e(asset('jQuery/formAjax.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('_template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/sdcard0/.aTCC/Artem/resources/views/Evento/edit.blade.php ENDPATH**/ ?>