@extends('_template.main')

@section('stylesheet')

   <link rel="stylesheet" href="{{ asset('css/evento/corpo.css') }}">
@endsection

@section('content')
    @parent
    <div class="topo" >
         <h1>{{ $evento['titulo'] }}</h1>
         
    </div>
    
    <div class="conteudo" >
    	<div class="descricao">
    		<p>
    			"{{ $evento['descricao'] }}"
    		</p>
    	</div>
    	
    	<div class="foto" >
    	    <div class="imgBox">
    	         <img src="{{ asset('uploads/eventos/'.$evento['img'])}}">   	    
    	    
    	    </div>
    	</div>
    	
   <div class="data" >
		@php
			//2019-09-09 00:00:00

			// Inicio 

	   	    $iano = substr($evento['inicio'], 0, 4);
			$imes = substr($evento['inicio'], 5, 2);
			$idia = substr($evento['inicio'], 8, 2);

			$ih = substr($evento['inicio'], 11, 2);
			$im = substr($evento['inicio'], 14, 2);

			// Termino 

			$tano = substr($evento['termino'], 0, 4);
			$tmes = substr($evento['termino'], 5, 2);
			$tdia = substr($evento['termino'], 8, 2);

			$th = substr($evento['termino'], 11, 2);
			$tm = substr($evento['termino'], 14, 2);
		@endphp
    	
			 <div>
			    <h3>Inicio: </h3>
				<h4>{{  $idia }} de {{ $mesExtenco[$imes] }} de {{ $iano }} </h4>
				<h4>às  {{ $ih }}:{{ $im }}</h4>
				
			</div>
    	    <div>
				<h3>Termino: </h3>
				<h4>{{ $tdia }} de {{ $mesExtenco[$tmes] }} de {{ $tano }}</h4>
			    <h4>às {{ $th }}:{{ $tm }}</h4>

			</div>
    	</div> 
    
    
    <div class="btnBox" >
    
    </div>
    
    <div class="baixo" >
    
    </div>
    		
@endsection