$(function(){

    $("#enviar").click(function(){
        let texto = $("[name=opiniao]").val();
        let radio;
        let radio2;
        $("[name=nota]").each(function(){
            if($(this).is(':checked')){
                radio = $(this).val();
            }
        });

        $("[name=nota_bairro]").each(function(){
            if($(this).is(':checked')){
                radio2 = $(this).val();
            }
        });        

        if(texto == "" || texto.length == 0){
            texto = "Sem comentário";
        }
        $("#form-opiniao").append("<input type='hidden' name='texto' value='" + texto+"'>");
        $("#form-opiniao").append("<input type='hidden' name='nota' value='" + radio+"'>");
        $("#form-opiniao").append("<input type='hidden' name='nota_bairro' value='" + radio2+"'>");
        $("#form-opiniao").submit();
        
    });

    $("[id^=dropdownMenuButton").click(function(){
        let elemento = $("#reply-" + $(this).attr('id').split('-')[1]);
        if(elemento.is(':hidden')){
            elemento.show();
        }else{
            elemento.hide();
        }
    });

    $("[id^=abreModal-").click(function(){
        let id = $(this).attr('id').split('-')[1];

        $('#avaliacao-modal').val(id);
        $('#enviarComentario').hide();
        $("#comentarios").hide();
        $('#form-resposta').show();
    });

    $("#voltar").click(function(e){
        e.preventDefault();
        $('#avaliacao-modal').val('');
        $('#form-resposta').hide();
        $('#enviarComentario').show();
        $("#comentarios").show();
        
    })

    $('#envia').click(function(e){
        e.preventDefault();

        $("#resp").submit();
    })
});


    $(document).ready(function(){
        // $('.progress-value > span').each(function(){
        //     $(this).prop('Counter',0).animate({
        //         Counter: $(this).text()
        //     },{
        //         duration: 3500,
        //         easing: 'swing',
        //         step: function (now){
        //             console.log
        //             $(this).text(Math.ceil(now));
        //         }
        //     });
        // });
        
    });
