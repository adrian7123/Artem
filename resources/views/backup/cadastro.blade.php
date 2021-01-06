<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Cadastro - Artem</title>      <!-- -->
  
  <meta name="theme-color" content="#152928">
  <meta name="apple-mobile-web-app-status-bar-style" content="#152928">
  <meta name="msapplication-navbutton-color" content="#152928">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/cadastro/corpo.css"> 
  <link rel="stylesheet" href="css/screen.css"  >

  
</head>
<body>
	<header class="head" >
    	<div class="header" >
        	<img class="icon a" src="icon/music.png">
        	<h1>Artem</h1>
        	<img class="icon b" src="icon/music.png">
        	<img class="icon c" src="icon/music.png">
           	<img class="icon d" src="icon/music.png">
    	</div>
    	
    	<div class="linkBox">
    	    <div></div>
        	<a  href="login">Entrar</a>
    	</div>	
    	
    </header>
	
    <section class="main" >
    <div class="container">
		<div>
    	<h1 class="gray" >Cadastro</h1>
    	<h3>Por favor preencha os campos abaixo</h3>
    	
    	<br>
    	
    	<form action="{{ url()->current() }}/cadastrar" method="post" onsubmit="return valida()" >
    	    @csrf
    		<div class="formBox" >
    		<!-- Nome  -->
    		<input id="userNome"  class="inputGrande all" type="text" name="usuarioNome" placeholder="Nome de Usuario">
    	    <label id="nomes"  class="war " >Por favor informe o nome* </label>
    	
   		 	<!-- Especialidades -->
   		 	<label>Especialidade</label>
   		 		<select class="inputGrande" name="especialidade">
   			 	<option selected>Músico</option>
   		 		<option>Dançarino</option>
   			 	<option>Escultor</option>
	   		 	<option>Ator</option>
   		 		<option>Escritor</option>
  	 		 	<option>Diretor</option>
   		 		<option>Fotógrafo</option>
   			 	<option>Cartunista</option>
   			 	<option>Designer</option>
   		 	</select><br>
    	
    	
    		<!-- E-mail -->
    		<input id="userEmail" class="inputGrande all" type="email" name="email" placeholder="Email">
    		<label id="emails"  class="war " >Por favor informe o E-mail*</label>
    	
    
    		<!-- Senha -->
    		<div class="senhaBox all" >
    			<input id="userSenha"  class="inputMedio all" type="password" name="usuarioSenha" placeholder="Senha">
    		
    			<input id="userConfirmSenha"  class="inputMedio all" type="password" placeholder="Confirme a senha">
    		</div>
    		<label id="senhas"  class="war " >Dados incorretos</label>
    		   	
    		<label><input id="userTermo"  type="checkbox"> Concordo com os <a class="textBlue" href="Index.html" >termos de uso</a>.</label>
    		<label id="termos" class="war " >Confirme os termos de uso para poder avançar</label>
    		
    		</div>
    		<br>
    		
    		<div class="btnBox" >
    			<button class="btn large blue" type="submit">Cadastrar</button>
   		  	</div>
   		  	
   		  </form>
    
   		 </div></div>
   		 <br>
    </section>
    
    <footer>
    <div>
  	 	<h1>Artem</h1>
   		<img class="icon e" src="icon/music.png">
    	</div>
    
    
  	    <hr>
    
    	<div class="subFooter">
   	 		<div class="footerIcon">
    			<a class="icon" href=""><img src="icon/headset.png"><p>Sobre Nós</p></a>
    			<a class="icon" href=""><img src="icon/wallet.png"><p>Segurança</p></a>
   				<a class="icon" href=""><img src="icon/newspaper.png"><p>Contratos</p></a>
    			<a class="icon" href=""><img src="icon/chat.png"><p>Contatos</p></a>
   		    </div>
   	  </div>
    </footer>
  
  
  <script type="text/javascript" src="js/abrirTelas.js" ></script>
  <script type="text/javascript" src="js/TELA.js"></script>
  <script type="text/javascript" src="js/validacao.js"></script>
  
</body>
</html>