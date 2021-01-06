@extends('_template.main')
  
@section('titleName', 'Home - ')
@section('stylesheet')  

  <link rel="stylesheet" href="{{ asset('css/home/corpo.css') }}">  
  <link rel="stylesheet" href="{{ asset('css/evento.css') }}" >
<!--  <link rel="stylesheet" href="{{ asset('css/Gallery/gallery.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Gallery/gallery.theme.css') }}"> -->
@endsection

@section('link')    	
    <a id="criarE" href="{{ route('criarEvento') }}" >Publicar Evento</a>
   	<a id="user" href="{{ route('usuario') }}">Usuario</a>

@endsection
 
@section('content')
    @parent
     <div class="topo">
       <div class="esquerda" >
         <h2 class="textBlue" >A onde um evento leva</h2>
                    <h2 class="textBlue fim" >a OUTRO...</h2>
       </div>  
       <div class="direita" >
           <form action="{{ route('pesquisar') }}" method="POST" onsubmit="return validaPesquisa()">
               @csrf
               <input id="pesq" class="inputPesquisa" type="text" placeholder="pesquisar eventos..." name="pesquisa">
               <button class="blue btn imgbtn" type="submit"><img class="imgIcon" src="{{ asset('icon/lupa.png') }}"></button>
           </form>
           <label id="warPesq" class="war"></label>
       </div>
       
     </div>
     
     <div class="centro">
         <div class="esquerda" >
        	<img src="{{ asset('img/evento/default_evento.jpg') }}" >        
            <section class="terceiro">    
                 <h3 class="Black">Publique um evento você mesmo: </h3>
                 <a class="btn blue" href="{{ route('criarEvento') }}" >Publicar Evento</a>
            </section>
         </div>
         <div class="direita" >
         	<h2 class="textBlue" >Próximos Eventos...</h2>
         </div>
     </div>
     <div class="porcento" >
         <h2 class="textBlue" >Aproveite 220% de TUDO</h2>
     </div>
     
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

@endsection