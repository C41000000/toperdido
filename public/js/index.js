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
                if($(this).text != ""){
                    dados[i] = $(this).text();
                    i++;
                }
                
            })
       }, 1000)     
       console.log(dados);
       if(dados.length > 1){
            var form = "<form id='formBusca' action='/busca' method='POST'></form>";
            $('body').append(form);
            for(i =0; i < dados.length; i++){
                $("#formBusca").append("<input type='text' name='"+i + "' value='" + dados[i] + "'>");
            } 
       }
      
        
      

      

      $('body').append(form);
    })
})

