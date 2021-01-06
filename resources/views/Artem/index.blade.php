@extends('_template.main')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/index/corpo.css') }}" 

@endsection

@section('link')
	<a id="cadastro" href="cadastro">Cadastre-se</a>
	<a id="login" href="login">Entrar</a>
@endsection
 
@section('content')
		@parent
		<div class="textBox" >
        	<h2>Os Melhores Eventos da Sua cidade <br>
					você encontra aqui no Artem!! </h2>
		</div>
		
       <div class="btnBox">
         <a href="home" class="btn large blue" name="button">Veja Aqui</a>
       </div>

     </div>
 
 @endsection
      