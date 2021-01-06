<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titleName')Artem</title>      
  
  <!-- MUDAR A COR DA ABA DO BOWSER -->
  
  <meta name="theme-color" content="#152928">
  <meta name="apple-mobile-web-app-status-bar-style" content="#152928">
  <meta name="msapplication-navbutton-color" content="#152928">

  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"> 
  
  @section('responsive')
  <!-- DEIXA O SITE RESPONSIVO -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="{{ asset('css/screen.css')}}">
  @show
  <!-- ICONE DO SITE -->
  
  <link rel="icon" href=" {{ asset('img/icone.png') }} "> 
  
  @yield('stylesheet')
 
 
 </head>
 <body> 
 	<header class="head" >
	 	<div class="header" >
		 	<img class="icon a" src="{{asset('icon/music.png')}}">
		 	<A href="{{ route('home') }}"><h1>Artem</h1></a>
 			<img class="icon b" src="{{asset('icon/music.png')}}">
 			<img class="icon c" src="{{asset('icon/music.png')}}">
 			<img class="icon d" src="{{asset('icon/music.png')}}">
 		</div>
 		<div class="linkBox">
 			
 			@yield('link')
 			
 		</div>
 	</header>
 	
 	@section('content')
 	<section class="main">
 	<div class="container" >
 	   @show
 	
 	</div>
 	</section>
 	
 	@section('footer')
 	<footer>
 		<div>
 			<h1>Artem</h1>
		 	<img class="icon e" src="{{asset('icon/music.png')}}">
	 	</div>
 	
    	<hr>
 	
 		<div class="subFooter">
	 		<div class="footerIcon">
		 		<a class="icon" href=""><img src="{{asset('icon/headset.png')}}"><p>Sobre Nós</p></a>
		 		<a class="icon" href=""><img src="{{asset('icon/wallet.png')}}"><p>Segurança</p></a>
	 			<a class="icon" href=""><img src="{{asset('icon/newspaper.png')}}"><p>Termos</p></a>
		 		<a class="icon" href=""><img src="{{asset('icon/chat.png')}}"><p>Contatos</p></a>
 			</div>
 		</div>
 	</footer>
 	@show
 	
 	<script src="{{ asset('jQuery/jquery3.4.1.js') }}"></script>
 	
 	
 	<script type="text/javascript" src="{{asset('js/abrirTelas.js')}}"></script>
 	<script type="text/javascript" src="{{asset('js/TELA.js')}}"></script>
 	<script type="text/javascript" src="{{asset('js/validacao.js')}}"></script>
 	@yield('js')
</body>
</html>