$(document).ready(function (){
 /*  alert($('#upload').data('valor'))
   alert($('#upload').val()) */

   if($('#upload').data('valor') != 2){

     //   alert('jsjsj')
        $("#textImg").css('display', 'none');
        $("#iconImg").attr("src", $('#upload').data('valor'))
            .css({
                "width": "98%",
                "height": "auto",
                "max-height": "99%"
            });
    }
})


$(function (){
    $('#upload').change(function (e){
        const file = $(this)[0].files[0];
  //      alert('file')
        const fileReader = new FileReader();
    //    alert('filereader')

     //   alert($("#upload").val());

        var nameSize = $("#upload").val().length;
        var nome = $('#upload').val().substring(12, nameSize);
        var extencao = $('#upload').val().substring(nameSize -4, nameSize);
       // alert(extencao)
        var warImg = $('#warning');


        var validado = false;

    switch (extencao){


        case '.jpg':
             validado = true;
             warImg.css("display", "none");
             break;
        case 'jpeg':
             validado = true;
             warImg.css("display", "none");
             break;
        case '.gif':
             validado = true;
             warImg.css("display", "none");
             break;
        case '.png':
             validado = true;
             warImg.css("display", "none");
             break;
        default:
             warImg.css("display", "block");
             warImg.html(`"${nome}" formato não suportado`);
             break;

    }

      if (validado){
            fileReader.onloadend = function (){
                //   alert('onloadend')
            $("#textImg").css('display', 'none');
            $("#iconImg").attr("src", fileReader.result)
            .css({
                "width": "98%",
                "height": "auto",
                "max-height": "99%"
            });

        }
        fileReader.readAsDataURL(file);
      }


    });

});
