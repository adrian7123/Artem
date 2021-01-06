@extends('_template.main')

@section('titleName', 'Login - ')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/login/corpo.css') }}"
@endsection

@section('link')
    <div></div>
    <a href="{{ route('cadastro') }}">Cadastre-se</a>

@endsection

@section('content')
    @parent
    	<form action="{{ route('logar') }}" method="post" onsubmit="return validaLogin()">
    	   @csrf
   			<div class="warBox"  style="{{ $erroLogin }}">
   				<h4 style="color: white;">Login ou Senha Incorretos</h4>
   			</div>
   			
   			<h1 class="gray">Entrar</h1>
    	  	<h3>Digite seus dados para acessar sua conta.</h3>
    		
    	
    		<input id="email" value="{{$email}}" name="email"  class="all inputGrande"  type="email" placeholder="Email" >
    		<label id="emails" class="war" >informe o e-mail*</label>
    		
    		<input id="senha" name="senha" class="all inputGrande"  type="password" placeholder="Senha"  >
    		<label id="senhas" class="war" >informe a senha*</label>
    	
    		
    		<a class="textBlue small"  href="{{ route('esqueceuSenha') }}" >Esqueceu a senha? </a>
    		<br><br>
    		
    		<div class="btnBox" >
    			<input class="btn large blue" type="submit" value="Entrar">
   		  	</div>
   	   </form>
@endsection