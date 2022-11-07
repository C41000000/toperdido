$(function(){

    $("#enviar").click(function(){
        let texto = $("[name=opiniao]").val();
        let radio;
        $("[id^=inlineRadio").each(function(){
            if($(this).is(':checked')){
                radio = $(this).val();
            }
        });

        if(texto == "" || texto.length == 0){
            texto = "Sem comentário";
        }
        $("#form-opiniao").append("<input type='hidden' name='texto' value='" + texto+"'>");
        $("#form-opiniao").append("<input type='hidden' name='nota' value='" + radio+"'>");
        $("#form-opiniao").submit();
        
    });


});