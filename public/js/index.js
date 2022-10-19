$(function(){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#map").click(function(){
        // debugger;

        let tentaAcharConteudo = setInterval(function () {
            let tem_conteudo;
            if($("#map").length < 1){
               tem_conteudo =  false;
            }else{
                tem_conteudo =  true;
            }
            console.log( $('.address-line').first());
            
            if(tem_conteudo){
                if($(".address").first().text() == ""){
                    console.log($(".address").first().text());
                    return false;
                }
                let i = 1;
                //pegando o nome do local
                $("[name=endereco0]").val($(".title ").text());
                
                //laco pra pegar as informacoes do endereo (rua, numero, cep, etc)
                $('.address').find('.address-line ').each(function(){
                    
                    if($(this).text != ""){
                        
                        $('[name=endereco' + i + ']').val($(this).text());
                        i++;
                    }
                    console.log('[name=endereco' + i + ']');
                    
                })
               
                //achei um conteúdo válido

                $('#formBusca').submit();
                //fazer o que tem de fazer
                clearInterval(tentaAcharConteudo);
            }
        }, 1000);
        
     
       
    })

    $('#cidNome').on('keyup', function(){
        let nome;
        $('#autocomplete').empty();
        $('#autocomplete').css('display', 'none');
        nome = $(this).val();
        if(nome.length > 2){
            $.get('/busca/'+nome, function(resposta){
                if(resposta.length > 0){
                    $('#autocomplete').css('display', 'block');
                    $.each(resposta, function(key){
                          let item = "<a href='/local/" + resposta[key]['cidade_id'] + "' class='list-group-item list-group-item-action'>" + resposta[key]['cidade_nome'] + "</a>";
                          $('.list-group').append(item);
                    });
                    
                }
            });
        }
    });
})



$(document).ready(function(){
    $('#cidNome').val('');
});