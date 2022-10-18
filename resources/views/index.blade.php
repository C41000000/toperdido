@extends('layouts.main')
@section('title', 'Tô Perdido')

@section("content")
  <style>
    #map{
      height:30vh;
      width:30vw;
    }
  </style>
<link rel="stylesheet" href="/css/index.css">
<script src='/js/index.js'></script>
  
  
  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/mucum.jpg"class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Muçum Ipsum</h1>
              <p>Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis!</p>
              <p><a class="btn btn-lg btn-primary" href="#">Se inscreva agora e deixe sua avaliação.</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/cana.jpg"class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

          <div class="container">
            <div class="carousel-caption">
              <h1>Caldo de Cana.</h1>
              <p>Suco de cevadiss deixa as pessoas mais interessantis.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Veja mais.</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/Faria-Musk-Bolsonaro-20mai2022.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Conhece o Elon Musk?</h1>
              <p>Ele está fazendo um foguete e fazendo um celular pra competir com o Apple.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Veja as novidades.</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>

    <div id="map"></div>
    <form id='formBusca' action='/local' method='POST'>
    @csrf
    <input type='hidden' name='endereco0' value=''>
    <input type='hidden' name='endereco1' value=''>
    <input type='hidden' name='endereco2' value=''>
    <input type='hidden' name='endereco3' value=''>
    </form>
  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="/img/rafa.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <h2 class="fw-normal">Rafa Moreira</h2>
          <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mim que vai caçá sua turmis!Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Quem manda na minha terra sou euzis!</p>
          <p><a class="btn btn-secondary" href="#">Ver Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/img/bill.jpg"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <h2 class="fw-normal">Bora Bill</h2>
          <p>Viva Forevis aptent taciti sociosqu ad litora torquent.Copo furadis é disculpa de bebadis, arcu quam euismod magna.Aenean aliquam molestie leo, vitae iaculis nisl.Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
          <p><a class="btn btn-secondary" href="#">Ver Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/img/matue.jpg"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <h2 class="fw-normal">Matuê</h2>
          <p>Manduma pindureta quium dia nois paga.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.A ordem dos tratores não altera o pão duris.Sapien in monti palavris qui num significa nadis i pareci latim.</p>
          <p><a class="btn btn-secondary" href="#">Ver Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Conhece o Elon Musk? <span class="text-muted">Ta fazendo foguete</span></h2>
          <p class="lead">Em pleno 2022, ano do Elon Musk. Hoje o menino da nota vermelha venceu. Às vezes queria ser normal. Cheguei calado ergui meus pesos e fui embora. Tem uma coroa na minha maldade, se nada der certo, vou ativar o modo, prostshape. Projetinho fellas. Se você joga Minecraft, obrigatóriamente precisa estar no shape.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="download.jpeg" ></img>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Eu sou um mero camponês! <span class="text-muted">Sempre sheipado</span></h2>
          <p class="lead">Em pleno 2022, ano do foguete. Se está desempregado e ainda não tem Shape, é uma desonra samurai. As gringas bugaram. Acredite nos seus sonhos. Projetinho fellas. Parabéns, mas se o shape não estiver em dia, nada vale o parabéns. Tá acordado e desempregado, obrigatóriamente, teoricamente, praticamente, necessariamente, deve estar no shape.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="FcvdYzjXgAEpH8R.jpg_large" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">O Shape fala por mim! <span class="text-muted">Conhece o Jack Chan?</span></h2>
          <p class="lead">Em pleno 2022, ano de eleição. Nem sei como seria o mundo sem eu estar sheipado. Botei o shape em jogo. Só queria voltar no tempo e jogar meu Super Nintendo. Nem sei como seria o mundo sem eu estar sheipado. Às vezes queria ser normal. Eu sou apenas um mero camponês.
</p>
        </div>
        <div class="col-md-5">
          <img src="FcjfAv7XkAEA8kr.jpg_large"class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
  </main>



  <script>


    function initMap(){
      // Map options
      var options = {
        zoom:8,
        center:{lat:-19.7858502,lng:-42.1471111}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      // Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });

      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */

      // Array of markers
      var markers = [
        {
          coords:{lat:42.4668,lng:-70.9495},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1>Lynn MA</h1>'
        },
        {
          coords:{lat:42.8584,lng:-70.9300},
          content:'<h1>Amesbury MA</h1>'
        },
        {
          coords:{lat:42.7762,lng:-71.0773}
        }
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
  </script>
   <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAngG_XRRSBImRIqXVqR3sp1ORp-3zYlTQ&callback=initMap">
  </script> 
  
@endsection