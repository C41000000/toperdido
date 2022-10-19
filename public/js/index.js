$(function(){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#map").click(function(){
    
        let tentaAcharConteudo = setInterval(function () {

            let conteudo = salvaDados();
            console.log(conteudo);
            if(conteudo){
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

function salvaDados(){

    if($("#map").length < 1){
        return false;
    }
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
   }, 3000);
   
   return true;
   
}

$(document).ready(function(){
    $('#cidNome').val('');
});