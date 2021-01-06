@extends('_template.main')

@section('stylesheet')

   <link rel="stylesheet" href="{{ asset('css/esqueceuSenha/corpo.css')}}">
@endsection

@section('content')
    @parent
    		<div class="esquerda" >
				<h1>Recuperar sua senha</h1>
				<p><span>Sua senha sera enviada para seu email</span><br>
		      <br>
				Por favor insira seu endereço de E-mail</p>
				<input class="inputGrande"  type="email" placeholder="Email">			
				
			</div>
			
			<div class="direita" >		
				<input class="btn large blue"  type="submit" value="Confirmar" >
			</div>	
@endsection