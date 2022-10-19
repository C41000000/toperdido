@extends('layouts.main')
@section('title', $cidade->cidade_nome)

@section('content')
<style>
    body{
        
    }
</style>
<main>
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Locais mais famosos de {{$cidade->cidade_nome}}</h1>
          @if($locais)
            <h3>Abaixo está nossa seleção de melhores lugares para se visitar nessa região!</h3>
          @endif

          @if(!$locais)
            Poxa, não encontramos nenhum lugar legal para mostrar!
          @endif
          <p class="lead text-muted"></p>
         
        </div>
      </div>
    </section>
    
    @if($locais)
    <div class="album py-5 bg-light">
      <div class="container">
      
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($locais as $local)
            @php
            // dd($local)
            @endphp
          <div class="col">
            <div class="card shadow-sm">
              <img src='{{$local->img}}' class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>

              <div class="card-body">
                <p class="card-text">{{$local->nome}}</p>
                <p class="card-text">{{$local->rua_nome}} - {{$local->bairro_nome}}</p>

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
 
          </div>


        </div>
      </div>
    </div>
    @endif

  </main>

@endsection