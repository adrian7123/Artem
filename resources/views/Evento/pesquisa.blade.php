@extends('_template.main')

@section('titleName', 'Perquisar - ')

@section('responsive')@endsection

@section('stylesheet')

   <link rel="stylesheet" href="{{ asset('css/pesquisa/corpo.css') }}">
   <link rel="stylesheet" href="{{ asset('css/evento.css') }}">
@endsection

@section('content')        
	@parent
	
	
	
	<div class="pesquisaBox">
	     <form action="{{ route('pesquisar') }}" method="POST" onsubmit="return validaPesquisa()">
           @csrf
	         <input id="pesq" class="inputPesquisa" type="text" placeholder="pesquisar eventos..." name="pesquisa" value="{{ isset($pesquisa) ? $pesquisa : ''}}">
	         <button class="blue btn imgbtn" type="submit"><img class="imgIcon" src="{{ asset('icon/lupa.png') }}"></button>
	     </form>
	     <label id="warPesq" class="war"></label>
	
	</div>
	
	@if(count($eventos) > 0)
    <div class="eventoBox">         
         
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
     </div>  
     @else
         <h1 class="textBlack">Nenhum evento encontrado</h1>
     @endIf

@endsection
@section('footer')@endsection