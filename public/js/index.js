$(document).ready(function(){
    
})

$(function(){
    $("#map").click(function(){
    
       let i = 0;
       let array = new Array();

       $('.address-line').each(function(){
           
           array[i] = $(this).text();
           i++;
       })

       alert(array);
       return false;
        $.ajax({
            url: '/buscas/retorna-local-json',
            dataType: 'json',
            data: {array},
            method: 'POST',
        })
    })
})