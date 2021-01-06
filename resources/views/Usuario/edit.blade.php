@extends('_template.main')

@section('titleName', 'Editar Perfil - ')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/cadastro/corpo.css') }}">

@endsection


@section('content')
		@parent
		<div>
  		<h1 class="gray">Editar Perfil</h1>
    	<h3>Edite seus Dados pessoais</h3>
    	
    	<br>
    	
    	<form id="formAjax"  action="{{ route('updateUsuario', $user['id']) }}" method="POST" onsubmit="return validaEdit()" >
    	    @csrf
    		<div class="formBox" >
    		<!-- Nome  -->
    		<input id="nome" value="{{ $user['nome'] }}"  class=" all" type="text" name="nome" placeholder="Nome de Usuario">
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
    		<input id="email" class=" all" type="email" name="email" value="{{ $user['email'] }}" placeholder="Email">
    		<label id="emails"  class="war " >Por favor informe o E-mail*</label>
    	    <label class="war" style="{{ $erroEmail }}">Email já existe</label>
    
    		<!-- Senha -->
    		
    		<h3>Editar Senha <br> (Obs: Não preencha esses campos se você não pretende mudar sua senha)</h3>
    		
    		<input id="senhaVelha" class="all" type="password" name="senhaVelha" placeholder="Informe a sua senha antiga" >
    		<label style="color: red" >{{ isset($senhaErr) ? $senhaErr : '' }}</label>
    		
    		
    		<div class="senhaBox all" >
    		  	<input id="senha"  class="all" type="password" name="senha" placeholder="Nova Senha">	
    			<input id="confirmSenha"  class="all" type="password" placeholder="Confirme sua senha">
    		</div>
    		<label id="senhas"  class="war " >Dados incorretos</label>
    		   	
    		
    		</div>
    		<br>
    		
    		<div class="btnBox" >
    			<input class="btn large blue" type="submit" value="Salvar" >
   		  	</div>
   		  	
			 </form>
		</div>

	
		
@endsection

@section('js')
	<script src="{{ asset('jQuery/formAjax.js') }}"></script>
@endsection