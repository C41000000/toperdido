$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#map").click(function(){
    
       let i = 1;
       let dados = new Array();

       //temos que esperar a caixa do endereco aparecer no mapa pra conseguir os dados por isso timeout
       setTimeout(function(){
            //pegando o nome do local
            dados[0] = $(".title ").text();
            
            //laco pra pegar as informacoes do endereo (rua, numero, cep, etc)
            $('.address-line').each(function(){
                dados[i] = $(this).text();
                i++;
            })
       }, 1000)     

       $.ajax({
        url: '/local',
        type: 'POST',
        dataType: 'string',
        data: {dados},
        success:function(resposta){
            console.log(resposta);
        }
       });
    })
})

