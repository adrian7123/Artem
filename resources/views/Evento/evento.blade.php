@extends('_template.main')

@section('responsive')@endsection

@section('titleName', 'Evento - ')

@section('stylesheet')

   <link rel="stylesheet" href="{{ asset('css/evento/corpo.css') }}">
@endsection

@section('link')
    @if($_criador)
            <a href="{{ route('home.editar', $evento['id']) }}" >Editar</a>
            <form class="formLink" action="{{ route('home.destroy', $evento['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btnLink" value="Deletar">
            </form>
        </div>
    @endIf
@endsection

@section('content')
    @parent
    <div class="topo" style="background-image: url('{{ asset('uploads/eventos/'.$evento['img']) }}')" >
    </div>
    <div class="foto"  >
        <div class="imgBox">
            <img src="{{ asset('uploads/eventos/'.$evento['img'])}}">

        </div>
    </div>
    <div class="miniContainer">
    <div class="conteudo" >

    	<h1>{{ $evento['titulo'] }}</h1>

    </div>





    <div class="data" >

			    <div class="dia" >
			        <img class="date textBlack" src="{{ asset('img/icon/icon_date.png') }}" >
					<h5>{{  $idia }} de {{ $mesExtenco[$imes] }} de {{ $iano }}, {{ $ih }}h -

				        {{ $tdia }} de {{ $mesExtenco[$tmes] }} de {{ $tano }}, {{ $th }}h</h5>
				</div>

				<div class="endereco textBlack" >
					<img class="gps" src="{{ asset('img/icon/icon_gps.png') }}" >
					<h5>{{ $endereco['rua'] }}, {{ $endereco['bairro'] }} - {{ $endereco['cidade'] }}, {{ $endereco['estado'] }}</h4>
				</div>

               <div class="endereco textBlack" >
                    <img class="gps" src="{{ asset('img/icon/icon_user.png') }}" >
                    <h5>PARTICIPANTES: {{ $participantes }}</h4>
                </div>


    </div>
        <div class="baixo" >
            <h2 class="textBlack" >Descrição do Evento</h2>
            <div class="descricao">
                <p id="desc" data-valor="" >
                    {{ $descricao }}


                </p>
            </div>
            <div class="autor" >
                <h3 class="textBlack">Por: <span class="textFino" >{{ $evento['autor'] }}</span></h3>

            </div>
        </div>

            <div class="btnBox"  >
                @if($consulta)
                    <a style="display:{{ !$_criador ? '' : 'none' }}" href="{{ route('participar', $evento['id']) }}" class="btn blue large white" >Participar</a>
                @else
                    <a style="display:{{ !$_criador ? '' : 'none' }}; background: #ff0000;" class="btn large white" href="{{ route('deletarParticipacao', $consultaId ) }}">Cancelar</a>

                @endIf

            </div>

    </div>

@endsection
