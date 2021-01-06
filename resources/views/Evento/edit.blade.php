@extends('_template.main')

@section('titleName', 'Editar Evento - ')

@section('responsive')@endsection

@section('stylesheet')

    <link rel="stylesheet" href="{{ asset('css/evento/corpo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit/corpo.css') }}">
@endsection

@section('content')
    @parent
    <form id="formAjax"  action="{{ route('home.update', $evento['id']) }}" method="post">
        @csrf
        @method('PUT')
        <div class="containe">
    <div class="topo" style="background-image: url('{{ asset('uploads/eventos/'.$evento['img']) }}')">
    </div>
    <div class="foto"  >
        <div class="imgBox">
            <img src="{{ asset('uploads/eventos/'.$evento['img'])}}">

        </div>
    </div>

    <div class="miniContainer">
        <div class="conteudo" >

        <input name="titulo" class="inputTitulo" type="text" value="{{ $evento['titulo'] }}">
        <label id="warTitulo"  class="war"></label>
       </div>


        <div class="data" >

            <h2 class="textBlack" >Endereco</h2>

            <h3>Buscar pelo CEP(obs: buscando o CEP de sua cidade ele preenche automaticamente os campos) </h3>

            <div class="inputBox" >
                <input class="inputGrande" type="number" value="{{ isset($valueCep) ? $valueCep : '' }}" id="cep" name="cep"  placeholder="Ex. 18400000">
                <button id="buscarCep" name="buscarCep"  class="blue btn imgbtn" type="button" value="true">
                    <img class="imgIcon" src="{{ asset('icon/lupa.png') }}"></button>
            </div>            

            <h3>Atualize o endereço do evento</h3>
            <label>cidade</label>
            <input id="cidade" class="inputGrande"  type="Text" name="cidade" value="{{ isset($endereco['cidade']) ? $endereco['cidade'] : '' }}" >
            <label id="warCidade"  class="war" ></label>

            <label>bairro</label>
            <input id="bairro"  class="inputGrande"  type="Text" name="bairro" value="{{ isset($endereco['bairro']) ? $endereco['bairro'] : '' }}">
            <label id="warBairro"  class="war" ></label>

            <label>Rua</label>
            <input id="rua"  class="inputGrande"  type="Text" name="rua" value="{{ isset($endereco['rua']) ? $endereco['rua'] : '' }}">
            <label id="warRua"  class="war" ></label>


            <label>estado</label>
            <select class="inputGrande" name="estado">
                <option {{  isset($cep['uf']) && $cep['uf'] == 'SP' ? 'selected' : '' }} >SP</option>
                <option {{  isset($cep['uf']) && $cep['uf'] == 'RJ' ? 'selected' : '' }} >RJ</option>
                @foreach($estados as $estado)
                    <option  {{  isset($cep['uf']) && $cep['uf'] == $estado ? 'selected' : '' }} >{{ $estado }}</option>
                @endforeach
            </select>

            <div class="data">
                <h2 class="textBlack" >Data</h2>

                <div class="contain">
                    <p>Atualize a data de realização do evento</p>

                    <div class="inputBox">

                        <div class="msm">
                            <h3>Dia de inicio:</h3>
                            <div class="inputIcon">
                                <img  src="{{ asset('img/icon/icon_date.png') }}">
                                <input id="idata"  type="date" value="{{ isset($data) ? $data : $dataInit }}" name="dataInit">
                            </div>
                        </div>

                        <div class="msm">
                            <h3>Hora de início:</h3>
                            <div class="inputIcon">
                                <img  src="{{ asset('img/icon/icon_time.png') }}">
                                <input id="ihora" type="time" value="{{ isset($hora) ? $hora : $horaInit }}" name="horaInit">

                            </div>
                        </div>

                        <div class="msm">
                            <h3>Dia de termino:</h3>
                            <div class="inputIcon">
                                <img  src="{{ asset('img/icon/icon_date.png') }}">
                                <input id="tdata" type="date" value="{{ isset($data) ? $data : $dataTerm }}" name="dataTerm">

                            </div>
                        </div>

                        <div class="msm">
                            <h3>Hora de termino:</h3>
                            <div class="inputIcon">
                                <img  src="{{ asset('img/icon/icon_time.png') }}">
                                <input id="thora"  type="time" value="{{ isset($hora) ? $hora : $horaTerm }}" name="horaTerm">

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
                    {{ $descricao }}


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

@endsection

@section('js')
    <script src="{{ asset('jQuery/buscarCep.js') }}"></script>
    <script src="{{ asset('jQuery/formAjax.js') }}"></script>

@endsection