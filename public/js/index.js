$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#map").click(function(){
    
     
       var dados = new Array();
        
       //temos que esperar a caixa do endereco aparecer no mapa pra conseguir os dados por isso timeout
       setTimeout(function(){
            let i = 1;
            //pegando o nome do local
            $("[name=endereco0]").val($(".title ").text());
            
            //laco pra pegar as informacoes do endereo (rua, numero, cep, etc)
            $('.address-line').each(function(){
                if($(this).text != ""){
                    
                    $('[name=endereco' + i + ']').val($(this).text());
                    i++;
                }
                
            })
       }, 2000);
       
       $("#formBusca").submit();
       
    //    return false;
       
    })
})

