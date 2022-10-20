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
            <h3>Aqui você irá encontrar o locais mais bem avaliados de {{$cidade->cidade_nome}}, onde poderá ver de cara quem chegou na cidade e já amou!</h3>
          @endif

          @if(!$locais)
            Poxa, não encontramos nenhum lugar legal para mostrar!
          @endif
          <p class="lead text-muted"></p>
         
        </div>
      </div>
      @if($locais)
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Procure por um local específico" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Procurar</button>
        </form>
      @endif
    </section>
    
    @if($locais)
		<main>
		 
		  <div class="album py-5 bg-light">
		    <div class="container">

		      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($locais as $local)
		        <div class="col">
		          <div class="card shadow-sm">
		            <img src='{{$local->img}}' class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

		            <div class="card-body">
		              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		              <div class="d-flex justify-content-between align-items-center">
		                <div class="btn-group">
		                  <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
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
		</main>
    @endif

  </main>

@endsection