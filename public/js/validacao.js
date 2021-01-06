
var nomes  = document.getElementById('nomes'),
	emails = document.getElementById('emails'),
	senhas = document.getElementById('senhas'),
	termos = document.getElementById('termos');


var warImg = document.getElementById('warning');
warImg.style.color = '#ff0000';
warImg.style.display = 'none';


function valida(){

   var nome = document.getElementById('nome'),
		email = document.getElementById('email'),
		senha = document.getElementById('senha'),
		confirmSenha = document.getElementById('confirmSenha'),
		termo = document.getElementById('userTermo');

		if(nome.value == "" || nome.value == null){
			nomes.style.visibility = 'visible';
			nomes.style.position = "relative";
		}else {
			nomes.style.visibility = 'hidden';
			nomes.style.position = "hidden";
		}

		if(email.value == ""){
			emails.style.visibility = 'visible';
		    emails.style.position = "relative";
		}else {
			emails.style.visibility = 'hidden';
			emails.style.position = "hidden";
		}

		if(senha.value == "" || confirmSenha.value == "" || senha.value != confirmSenha.value){
	    	senhas.style.visibility = 'visible';
	        senhas.style.position = "relative";
		}else {
		    senhas.style.visibility = 'hidden';
		    senhas.style.position = "hidden";
		}

		if(!termo.checked){
	    	termos.style.visibility = 'visible';
	    	termos.style.position = "relative";
		}else {
	     	termos.style.visibility = 'hidden';
	     	termos.style.position = "hidden";
		}

		if(nome.value == "" || email.value == "" || senha.value == "" || !termo.checked || senha.value != confirmSenha.value){

			return false;
		}
		return true;
}

function validaLogin(){
	var email = document.getElementById('email'),
		  senha = document.getElementById('senha');

//	var war = document.querySelector(".war")

	if(senha.value == ""){
		senhas.style.visibility = "visible";
		senhas.style.position = "relative";
	}else{
		senhas.style.position = "absolute";
		senhas.style.visibility = "hidden";
	}

	if(email.value == ""){
		emails.style.visibility = "visible";
		emails.style.position = "relative";
	}else {
		emails.style.visibility = "hidden";
		emails.style.position = "absolute";
	}

	if(email.value == "" || senha.value == ""){
		return false;
	}

	return true;


}

    var nome = $('#nome'),
        form = $('#formulario'),
        idata = $('#idata'),
        ihora = $('#ihora'),
        tdata = $('#tdata'),
        thora = $('#thora'),
        buscarCep = $('#buscarCep'),
        cidade = $('#cidade'),
        bairro = $('#bairro'),
        rua = $('#rua'),
        descricao = $('#descricao'),
        termo = document.getElementById('termo')


    var warNome = $('#warNome'),
        warData = $('#warData'),
        warCep = $('#warCep'),
        warCidade = $('#warCidade'),
        warBairro = $('#warBairro'),
        warRua = $('#warRua'),
        warDescricao = $('#warDescricao'),
        warTermo = $('#warTermo')






function validaPesquisa(){
    if($('#pesq').val() == null || $('#pesq').val() == '' ){
        $('#warPesq').html('Preencha o campo para pesquisar');
        return false;
    }
    return true;

}

function validaCriarEvento(){
    /**
     *
     * nome
     *
     */

    if(nome.val() == "" || nome.val() == null){
        warNome.html('Por favor insira um nome para o evento')
        return false;
    }else if(nome.val().length > 23){
        warNome.html('Nome de Evento muito grande (minimo 23 letras)')
        return false;
    }else {
        warNome.html('')
    }

    /**
     *
     * imagen
     * @type {number | jQuery}
     */

    var nameSize = $("#upload").val().length;
    var extencao = $('#upload').val().substring(nameSize -4, nameSize);

    validado = false;

    switch (extencao){
        case '.jpg':
            validado = true;

            break;
        case 'jpeg':
            validado = true;

            break;
        case '.gif':
            validado = true;

            break;
        case '.png':
            validado = true;

            break;
        default:

            break;

    }

    if($("#upload").val() == ''){
        validado = true;
    }

    /**
     *
     * Endereco
     *
     *
     */

    if(cidade.val() == '' || cidade.val() == null){
        warCidade.html('Preencha o campo !!')
        return false;
    }else {
        warCidade.html('')
    }
    if(bairro.val() == '' || bairro.val() == null){
        warBairro.html('Preencha o campo !!')
        return false;
    }else {
        warBairro.html('')
    }
    if(rua.val() == '' || rua.val() == null){
        warRua.html('Preencha o campo !!')
        return false;
    }else {
        warRua.html('')
    }

    /**
     *
     * descrição
     *
     */

    if(descricao.val() == '' || descricao.val() == null){
        warDescricao.html('<br>Preencha o campo !!')
        return false;
    }else {
        warDescricao.html('')
    }

    /**
     *
     * termos de uso
     *
     */

    if(!termo.checked){
        warTermo.html('Aceite os termos para proceguir')
        return false;
    }else {
        warTermo.html('')
    }

    if(validado) {
        return true;
    }else {
        return false;
    }
}




