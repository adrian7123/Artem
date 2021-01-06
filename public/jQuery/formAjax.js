$(function (){
    
    var form = $('#formAjax')
    
    form.submit(function (e){
        e.preventDefault()
        
        $.ajax({
            url: form.attr("action"),
            type: form.attr("method"),
            data: form.serialize(),
            dataType: "json",            
            /*beforeSend: function () {
               
            },*/
            sucess: function (data){
                alert(data)
            }
        })
        
        
    }) 
     
})


function valida(){
    var titulo = $("#titulo"),
        cidade = $("#cidade"),
        bairro = $("#bairro"),
        rua    = $("#rua"),
        idata  = $("#idata"),
        ihora  = $("#ihora"),
        tdata  = $("#tdata"),
        thora  = $("#thora"),
        descricao = $("#descricao")
        
    var warTitulo = $("#warTitulo"),
        warCidade = $("#warCidade"),
        warBairro = $("#warBairro"),
        warRua    = $("#warRua"),
        warData   = $("#warData"),
        wardescricao = $("#warDesxricao")
        
        
        
     alert('validando')
     
     
     if(titulo.val() == ""){
         
     }
     
        
        
   
     
        
        
}