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

$(document).ready(function (e){
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        cidade.val('')
        bairro.val('')
        rua.val('')
    }

    //Quando o campo cep perde o foco.
    buscarCep.click(function() {

       // alert('vdsaj');

        //Nova variável "cep" somente com dígitos.
        var cep = $('#cep').val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                cidade.val("...");
                bairro.val("...");
                rua.val("...");


                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        cidade.val(dados.localidade);
                        bairro.val(dados.bairro);
                        rua.val(dados.logradouro);

                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulario_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulario_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulario_cep();
        }
    });
});
