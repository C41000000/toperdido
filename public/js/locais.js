$(function(){
    $('#localNome').on('keyup', function(){
        let nome;
        $('#busca').empty();
        $('#busca').css('display', 'none');
        nome = $(this).val();
        if(nome.length > 2){
            $.get('/informacoes/'+nome, function(resposta){
                if(resposta.length > 0){
                    $('#busca').css('display', 'block');
                    $.each(resposta, function(key){
                        console.log(resposta[key]);
                          let item = "<a style='text-align: left;' href='/detalhes/" + resposta[key]['local_id'] + "' class='list-group-item list-group-item-action'>" + resposta[key]['nome'] +" - "+ resposta[key]['rua_nome'] + "</a>";
                          $('.list-group').append(item);
                    });
                    
                }
            });
        }
    });

});

$(document).ready(function(){
    $('#localNome').val('');


})