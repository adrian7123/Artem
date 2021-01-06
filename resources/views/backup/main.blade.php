<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Cadastro - Artem</title>      <!-- -->
  
  <!-- MUDAR A COR DA ABA DO BOWSER-->
  
  <meta name="theme-color" content="#152928">
  <meta name="apple-mobile-web-app-status-bar-style" content="#152928">
  <meta name="msapplication-navbutton-color" content="#152928">
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="css/contrato.css" >
  <link rel="stylesheet" href="css/estilo.css" >
  <link rel="stylesheet" href="css/main/corpo.css">  
  <link rel="stylesheet" href="css/screen.css"  >
  <link rel="stylesheet" href="css/NAV.css" >
  
  <style type="text/css">
  
  </style>
</head>
<body>
	<header>
    	<div>
        	<img class="icon a" src="icon/music.png">
        	<h1>Artem</h1>
        	<img class="icon b" src="icon/music.png">
        	<img class="icon c" src="icon/music.png">
           	<img class="icon d" src="icon/music.png">
    	</div>
    	
    	<div class="linkBox">
    	    <div></div>
        	<a  href="perfil">Perfil</a>
    	</div>	
    </header>
    
    <div class="navBar" >
    	<ul>
    	<!--	<li><a>como começar?</a></li> -->
    		<li>
    			<form action="pesquisa.html" method="post"> 
    				<input class="inputMedio" type="text" placeholder="O que está Buscando..." >
    				<input class="blue" type="submit" value="Presquisar" >
    			</form>
    		</li>
    		<li>
    			<img alt="" src=""  >
    			<a href="criarContrato.php" >Criar um Evento</a>
    		</li>
    		<li>
    			<a>Meus Eventos</a>
    		</li>
    	</ul>
    </div>
	
    
    <div class="container">
    	@if(isset($contratos))
    	@foreach($contratos as $contrato) 
    	
    	<div class="contrato">
    		<a href="contrato" >
  			  	<div class="contHeader" >
    				<h1 class="contNome" > {{ $contrato->titulo  }} </h1>
    				<h4>por: {{ $contrato->autor }} </h4>
    			</div>
    			<div class="contCenter" >
    				<h3 class="contDesc" >{{ $contrato->descricao }}</h3>
    			</div>
    			<h2 class="contVagas" >Vagas: <span>{{ $contrato->vagas }}</span></h2>
    		</a>
    		<form action="{{ url()->current() }}/participar/contrato" method="post"  >
    		<div class="contFooter" >
    			<h4 class="contData">Para: {{ date('d/m/Y', strtotime($contrato->dataExpiracao)) }}</h4>
    			<button class="btn large blue" type="submit" name="id" value="{{ $contrato->contratoId }}"  >Participar</button>
    		</div> 	
    		</form>
    	</div>
    	@endforeach
    	@endif

    	
    	</div>
    </div>  
   <footer>

   </footer>
   <script src="js/abrirTelas.js" ></script>
  
</body>
</html>