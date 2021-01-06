@extends('_template.main')

@section('titleName', 'Cadastro - ')
@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/cadastro/corpo.css') }}">

@endsection

@section('link')
	<div></div>
	<a href="login" >Login</a>
@endsection

@section('content')
		@parent
		<div>
  		<h1 class="gray">Cadastro</h1>
    	<h3>Por favor preencha os campos abaixo</h3>
    	
    	<br>
    	
    	<form action="{{ route('store') }}" method="post" onsubmit="return valida()" >
    	    @csrf
    		<div class="formBox" >
    		<!-- Nome  -->
    		<input id="nome" value="{{$nome}}"  class=" all" type="text" name="nome" placeholder="Nome de Usuario">
    	    <label id="nomes"  class="war " >Por favor informe o nome* </label>
    	
   		 	<!-- Nacionalidade -->
   		 	<label>Estado</label>
   			<select class="all" name="estado">
					<option selected>SP</option>
					<option>RJ</option>
					@foreach($estados as $estado)
					     <option>{{ $estado }}</option>
					@endForeach
				
				</select>

    		<!-- E-mail -->
    		<input id="email" class=" all" type="email" name="email" value="{{ $email }}" placeholder="Email">
    		<label id="emails"  class="war " >Por favor informe o E-mail*</label>
    	  <label class="war" style="{{ $erroEmail }}">Email já cadastrado</label>
    
    		<!-- Senha -->
    		<div class="senhaBox all" >
    			<input id="senha"  class="all" type="password" name="senha" placeholder="Senha">	
    			<input id="confirmSenha"  class="all" type="password" placeholder="Confirme a senha">
    		</div>
    		<label id="senhas"  class="war " >Dados incorretos</label>
    		   	
    		<label><input id="userTermo"  type="checkbox"> Concordo com os <a class="textBlue" href="Index.html" >termos de uso</a>.</label>
    		<label id="termos" class="war " >Confirme os termos de uso para poder avançar</label>
    		
    		</div>
    		<br>
    		
    		<div class="btnBox" >
    			<input class="btn large blue" type="submit" value="Cadastrar" >
   		  	</div>
   		  	
			 </form>
		</div>

		<div>
			<img class="icon iconGrande" src="{{ asset('img/Musical-Notes-PNG.png') }}">


		</div>
		
@endsection