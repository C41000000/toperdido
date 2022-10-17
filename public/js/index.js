$(function(){
    $("#map").click(function(){
    
       let i = 1;
       let array = new Array();

       setTimeout(function(){
            array[0] = $(".title ").text();
            $('.address-line').each(function(){
                array[i] = $(this).text();
                i++;
            })
       }, 1000)     
       
        
       axios.post('/local', {
        request: array,
        
      })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.error(error);
      });
    
        
    })
})