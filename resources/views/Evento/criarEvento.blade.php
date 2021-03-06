@extends('_template/main')

@section('titleName', 'Criar Evento - ')

@section('responsive')@endsection

@section('stylesheet')

   <link rel="stylesheet" href="{{ asset('css/criarEvento/corpo.css') }}">

@endsection

@section('content')
   @parent

   <form id="formulario"    action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validaCriarEvento()"   >
           @csrf

           <h1 class="Gray">Publicar Evento</h1>

           <div class="nomeFoto">

          <div class="contain">
              <h2 class="textBlue font25" >1. Qual o nome do Evento</h2>

              <h3>Nome do Evento</h3>
              <input id="nome"  class="inputGrande" type="text" placeholder="Ex. Festa de Aniver..." value="{{ $nome }}" name="nome">
              <label id="warNome"  class="war" ></label>

              <h3>Imagem do Evento</h3>
              <div class="fotoBox" >
           	     <div class="imgPicker" >
              	    <label for="upload" >
              	    	<img id="iconImg"  src="{{ asset('img/icon/icon_img.png') }}"  >

              	    	<h2 id="textImg"  class="gray" >Enviar imagen</h2>

              	    </label>
              		<input id="upload" type="file" name="img" data-valor="{{ isset($valueImg) ? asset($valueImg) : 2 }}">


             	 </div>
             	 <div class="texto" >
             	 	<h3>A dimensão recomendada é 1600 x 840 (mesma proporção do formato ultilizado nas páginas de evento do Facebook). Formato JPEG, GIF ou PNG no máximo 2MB, imagens com dimensão diferentes serão redimensionadas.</h3>

             	 </div>

              </div>
              <label id="warning"></label>
          </div>

       </div>

       <div class="data">
       		<div class="contain">
       		     <h2 class="textBlue font25">2. Quando o evento vai acontecer?</h2>
       		     <p>Informe ao público a data de realização do evento</p>

       		     <div class="inputBox">

       		          <div class="msm">
       		          <h3>Dia de inicio:</h3>
       		          <div class="inputIcon">
       		              <img  src="{{ asset('img/icon/icon_date.png') }}">
       		              <input id="idata"  type="date" value="{{ isset($data) ? $data : $dataInit }}" name="dataInit">
					  </div>
					  </div>

					  <div class="msm">
       		          <h3>Hora de início:</h3>
       		          <div class="inputIcon">
       		              <img  src="{{ asset('img/icon/icon_time.png') }}">
       		              <input id="ihora" type="time" value="{{ isset($hora) ? $hora : $horaInit }}" name="horaInit">

					  </div>
					  </div>

					  <div class="msm">
					  <h3>Dia de termino:</h3>
       		          <div class="inputIcon">
       		              <img  src="{{ asset('img/icon/icon_date.png') }}">
       		              <input id="tdata" type="date" value="{{ isset($data) ? $data : $dataTerm }}" name="dataTerm">

				      </div>
					  </div>

			     	  <div class="msm">
				      <h3>Hora de termino:</h3>
       		          <div class="inputIcon">
       		              <img  src="{{ asset('img/icon/icon_time.png') }}">
       		              <input id="thora"  type="time" value="{{ isset($hora) ? $hora : $horaTerm }}" name="horaTerm">

					  </div>
		     		  </div>

       		     </div>
       		     <label id="warData"  class="war" ></label>

       		</div>
       </div>

       <div class="endereco">
            <div class="contain">
				<h2 class="textblue font25">3. Onde seu evento vai acontecer?</h2>
				<p>Ajude o público a chegar até o seu evento!</p>

                <h3>Buscar pelo CEP(obs: buscando o CEP de sua cidade ele preenche automaticamente os campos) </h3>

                <div class="inputBox" >
        			<input class="inputGrande" type="number" value="{{ isset($valueCep) ? $valueCep : '' }}" id="cep" name="cep"  placeholder="Ex. 18400000">
          		    <button id="buscarCep" name="buscarCep"  class="blue btn imgbtn" type="button" value="true" href="{{ route('home.buscarCep') }}"><img class="imgIcon" src="{{ asset('icon/lupa.png') }}"></button>
                </div>
               

				<h3>Informe o endereço do evento</h3>
                <label>cidade</label>
                <input id="cidade" class="inputGrande"  type="Text" name="cidade" value="{{ isset($cep['localidade']) ? $cep['localidade'] : '' }}" >
                <label id="warCidade"  class="war" ></label>

                <label>bairro</label>
                <input id="bairro"  class="inputGrande"  type="Text" name="bairro" value="{{ isset($cep['bairro']) ? $cep['bairro'] : '' }}">
                <label id="warBairro"  class="war" ></label>

                <label>Rua</label>
                <input id="rua"  class="inputGrande"  type="Text" name="rua" value="{{ isset($cep['logradouro']) ? $cep['logradouro'] : '' }}">
                <label id="warRua"  class="war" ></label>


                <label>estado</label>
                <select class="inputGrande" name="estado">
                	<option {{  isset($cep['uf']) && $cep['uf'] == 'SP' ? 'selected' : '' }} >SP</option>
                	<option {{  isset($cep['uf']) && $cep['uf'] == 'RJ' ? 'selected' : '' }} >RJ</option>
                	@foreach($estados as $estado)
                	    <option  {{  isset($cep['uf']) && $cep['uf'] == $estado ? 'selected' : '' }} >{{ $estado }}</option>
                	@endforeach
                </select>

			</div>
       </div>

       <div class="descricao">
            <div class="contain">
                <h2 class="textBlue font25" >5. Descrição do Evento</h2>
                <p>Conte todos os detalhes do seu evento, como programação e os diferenciais da sua produção </p>

                <textarea style="
                	font-size: large;
                	margin-top: 13px;
                "
                id="descricao"
                name="descricao"

                rows="7"
                placeholder="Escreva a Descrição do evento">{{ isset($descricao) ? $descricao : '' }}</textarea>

                <label id="warDescricao"  class="war" ></label>
            </div>
       </div>



       <div class="responsabilidade">
            <div class="contain">
            	<h2 class="textBlue font25" >5. Responsabilidades</h2>
            	<div>
            		<input id="termo" type="checkbox" name="termo"><h3>Ao publicar esse evento reconheço que estou responsável pelos <a class="textBlue" >Termos de Uso</a>.</h3>
            	</div>
            	<label id="warTermo" class="war" ></label>
            </div>
       </div>

       <div class="button">
           <input class="btn BLUE large" type="submit" name="publicar"  value="Publicar" >
       </div>

   	  </form>




@endsection
@section('js')
		<script src="{{ asset('jQuery/Ajax.js') }}"></script>
        <script src="{{ asset('jQuery/buscarCep.js') }}"></script>

@endsection


@section('footer')@endsection
