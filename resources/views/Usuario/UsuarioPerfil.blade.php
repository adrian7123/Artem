@extends('_template.main')

@section('titleName', 'Perfil - ')

@section('responsive')@endsection

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/evento.css') }}" >
	<link rel="stylesheet" href="{{ asset('css/usuario/corpo.css') }}" >
	
	
@endsection

@section('link')
    <div></div>
    <a href="{{ route('logOut') }}">Sair</a>
@endsection

@section('content')	
	@parent
     <div class="topo" >
     	<h1 class="gray" >Minha Conta</h1>
     	
     </div>
     <div class="baixo" >
     	<div class="esquerda" >
     		<h2 class="textBlack" >Dados da Conta</h2>
     		
     		<div class="dado" >
     			<h3 class="textBlack" >Nome</h3>
     			<div class="fakeInput">
     		    	{{ $user['nome'] }}
     			</div>
     		</div>
     		
     		<div class="dado" >
     			<h3 class="textBlack">Email</h3>
         	    <div class="fakeInput">
     		         {{ $user['email'] }}
     	        </div>
 	  	   	</div>
     		
     		<div class="dado" >
     			<h3 class="textBlack">Senha</h3>
     			<div class="fakeInput">
     	    		•••••••
     			</div>
     		</div>
     		
     		<div class="btnBox">
     			<a class="btn white large blue" href="{{ route('editarUsuario') }}"  >Editar Dados Pessoais</a>
     		</div>
     	</div>
     	<div class="direita" >
     		<h2 class="textBlack" >Seus Eventos</h2>
     		
     		<div class="eventoBox">
     			@if($eventos != '')
 	    			@foreach($eventos as $evento)
    	 				<a href="{{ route('home.show', $evento['id']) }}">
   	  					<div class="evento" style="background-image: url('{{ asset('uploads/eventos/'.$evento['img'])}}')" > 
    	 					<div class="verMais">
     							<p>Ver +</p>
  		   					</div>
     						<div class="eventoBottom">
  		 	 	 				<h2>{{ $evento['titulo'] }}</h2>
	    	 				</div>
     		
     					</div>
  		   				</a>
     				@endforeach
     			@endIf
     		
     		</div>  
     		
     	</div>
     </div>

@endsection
@section('footer')@endsection