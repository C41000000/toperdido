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
          <img src="/img/caratingaimg.jpeg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Caratinga, a sua cidade!</h1>
              <p>Conheça os pontos turisticos e veja as suas avaliações.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Veja mais</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/contribuir.jpeg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

          <div class="container">
            <div class="carousel-caption">
              <h1>Cadastre-se</h1>
              <p>Se cadastrando no Tó Perdido é possivel registrar a sua opnião deixando comentarios e avaliações dos pontos turisticos.</p>
              <p><a class="btn btn-lg btn-primary" href="{{route('cadastro')}}">Veja mais</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/mapaImg.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Ocorrências</h1>
              <p>Registre ocorrência que aconteceram perto de você para auxiliar outros moradores da sua comunidade.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Registrar Ocorrência</a></p>
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




    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Você conhece a sua cidade ? <span class="text-muted">Pontos turistícos de Caratinga.</span></h2>
          <p class="lead">Esta viajando ou visitando uma nova cidade? A nossa aplicação tem o objtivo de ajudar-lhe a conhecer e saber o que fazer durante o seu momento de visita, navegue e conheça mais sobre a cidade em que esta no momento.</p>
          <p><a class="btn btn-secondary" href="#">Ver Mais &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img style="border-radius: 10px" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/pedra.jpg" ></img>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Segurança! <span class="text-muted">Como saber se aquele bairro é seguro.</span></h2>
          <p class="lead">Em pleno 2022 quem não se preocupa com a sua propria segurança, aqui no "Tó Perdido!" nós preocupamos com os nossos usuarios, disponibilizando um resumo de ocorrencias da sua cidade, informando o nivel de criminalidade do seu bairro, possibilitando que os proprios usuarios cadastrados cadastrem as suas ocorrencias.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img style="border-radius: 10px" src="/img/seguranca.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Registrar Ocorrência! <span class="text-muted">Ajude a sua comunidade.</span></h2>
          <p class="lead">Contribuir com a nossa aplicação é o mesmo que contribuir com o sua comunidade, seu bairro, seu vizinho. No "Tó Perdido" faz as suas proprias ocorrencias e ajuda muitas pessoas!</p>
            <p><a class="btn btn-secondary" href="#">Registrar Ocorrência &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img style="border-radius: 10px" src="/img/comunidade.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-lg-4">
          <img src="/img/caio.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <h2 class="fw-normal">Caio Amorim</h2>
          <p>Caio Amorim é nascido em Caratinga MG. Ele é aluno da Rede Doctum de Ensino e está no curso de Ciêcia da Computação, onde cursa atualmente o 4° período. Foi responsável por todo o back-end desse projeto.</p>
          <p><a class="btn btn-secondary" href="#">Ver Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/img/gustavo.jpeg"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <h2 class="fw-normal">Gustavo Corrêa</h2>
          <p>Gustavo Corrêa é nascido em Pocrane MG. Ele é aluno da Rede Doctum de Ensino e está no curso de Ciêcia da Computação, onde cursa atualmente o 4° período. Foi responsável pelo front-end desse projeto.</p>
          <p><a class="btn btn-secondary" href="#">Ver Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/img/matue.jpg"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <h2 class="fw-normal">Pedro Vieira</h2>
          <p>Pedro Vieira é nascido em Caratinga MG. Ele é aluno da Rede Doctum de Ensino e está no curso de Ciêcia da Computação, onde cursa atualmente o 4° período. Foi responsável pelo front-end desse projeto.</p>
          <p><a class="btn btn-secondary" href="#">Ver Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/img/juca.png"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

          <h2 class="fw-normal">Jordismar Filho</h2>
          <p>Jordismar Filho é nascido em Caratinga MG. Ele é aluno da Rede Doctum de Ensino e está no curso de Ciêcia da Computação, onde cursa atualmente o 4° período. Foi responsável pelo teste e marketing desse projeto.</p>
          <p><a class="btn btn-secondary" href="#">Ver Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

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


@endsection
