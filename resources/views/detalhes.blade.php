@extends('layouts.main')

@section('title', 'nome do local')
@php 
    
@endphp
@section('content')
<script src='/js/detalhes.js'></script>
<script src="https://partner.googleadservices.com/gampad/cookie.js?domain=bestjquery.com&callback=_gfp_s_&client=ca-pub-3311815518700050&cookie=ID%3D2f6f4dc27b67d162-22ab4a3f31d800a0%3AT%3D1668290470%3ART%3D1668290470%3AS%3DALNI_MYy0ekNlIFXEIwPpL4v5jd75j1VVA&gpic=UID%3D000009d825d86623%3AT%3D1668290470%3ART%3D1668290470%3AS%3DALNI_MYrvDgDOFy6P8OmyCANZD4fdnj14w&gpid_exp=1"></script>
<script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202211090101/show_ads_impl.js?bust=31070831" id="google_shimpl"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 
$(document).ready(function(){
    $('.progress-value > span').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
<style>
    body{
        margin-top:20px;
        /* background:#eee; */
    }
    .ajuste{
        max-width: 150%;
        height: auto;
    }
    .review-list ul li .left span {
        width: 32px;
        height: 32px;
        display: inline-block;
    }
    .review-list ul li .left {
        display: flex;
    }
    .review-list ul li .left span img {
        border-radius: 50%;
    }
    .review-list ul li .right h4 {
        font-size: 16px;
        margin: 0;
        display: flex;
    }
    .review-list ul li .right h4 .gig-rating {
        display: flex;
        align-items: center;
        margin-left: 10px;
        color: #ffbf00;
    }
    .review-list ul li .right h4 .gig-rating svg {
        margin: 0 4px 0 0px;
    }
    .country .country-flag {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
        margin: 0 7px 0 0px;
        border: 1px solid #fff;
        border-radius: 50px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }
    .country .country-name {
        color: #95979d;
        font-size: 13px;
        font-weight: 600;
    }
    .review-list ul li {
        border-bottom: 1px solid #dadbdd;
        padding: 0 0 30px;
        margin: 0 0 30px;
    }
    .review-list ul li .right {
        flex: auto;
    }
    .review-list ul li .review-description {
        margin: 20px 0 0;
        margin-bottom: 50px;
    }
    .review-list ul li .review-description p {
        font-size: 14px;
        margin: 0;
    }
    .review-list ul li .publish {
        font-size: 13px;
        color: #95979d;
    }

    .review-section h4 {
        font-size: 20px;
        color: #222325;
        font-weight: 700;
    }
    .review-section .stars-counters tr .stars-filter.fit-button {
        padding: 6px;
        border: none;
        color: #4a73e8;
        text-align: left;
    }
    .review-section .fit-progressbar-bar .fit-progressbar-background {
        position: relative;
        height: 8px;
        background: #efeff0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        background-color: #ffffff;
        ;
        border-radius: 999px;
    }
    .review-section .stars-counters tr .star-progress-bar .progress-fill {
        background-color: #ffb33e;
    }
    .review-section .fit-progressbar-bar .progress-fill {
        background: #2cdd9b;
        background-color: rgb(29, 191, 115);
        height: 100%;
        position: absolute;
        left: 0;
        z-index: 1;
        border-radius: 999px;
    }
    .review-section .fit-progressbar-bar {
        display: flex;
        align-items: center;
    }
    .review-section .stars-counters td {
        white-space: nowrap;
    }
    .review-section .stars-counters tr .progress-bar-container {
        width: 100%;
        padding: 0 10px 0 6px;
        margin: auto;
    }
    .ranking h6 {
        font-weight: 600;
        padding-bottom: 16px;
    }
    .ranking li {
        display: flex;
        justify-content: space-between;
        color: #95979d;
        padding-bottom: 8px;
    }
    .review-section .stars-counters td.star-num {
        color: #4a73e8;
    }
    .ranking li>span {
        color: #62646a;
        white-space: nowrap;
        margin-left: 12px;
    }
    .review-section {
        border-bottom: 1px solid #dadbdd;
        padding-bottom: 24px;
        margin-bottom: 34px;
        padding-top: 64px;
    }
    .review-section select, .review-section .select2-container {
        width: 188px !important;
        border-radius: 3px;
    }
    ul, ul li {
        list-style: none;
        margin: 0px;
    }
    .helpful-thumbs, .helpful-thumb {
        display: flex;
        align-items: center;
        font-weight: 700;
    }
    .espaco{
        display: flex;
    }
    .margem1{
        margin-left: 10px;
    }
    .bordaComentario{
        border: 1px solid rgba(128, 128, 128, 0.466);
        margin-bottom: 10px;
        padding: 10px;
    }
    .tab{
        margin-left: 5px;
    }
    .margem1{
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .margem_botao{
        margin-left: 40%;
        margin-top: 30px;
    }
    .progress{
        width: 150px;
        height: 150px;
        line-height: 150px;
        background: none;
        margin: 0 auto;
        box-shadow: none;
        position: relative;
        overflow: visible;
    }
    .progress:after{
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 5px solid #fff;
        position: absolute;
        top: 0;
        left: 0;
    }
    .progress > span{
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }
    .progress .progress-left{ left: 0; }
    .progress .progress-bar{
        width: 100%;
        height: 100%;
        background: none;
        border-width: 5px;
        border-style: solid;
        position: absolute;
        top: 0;
    }
    .progress .progress-left .progress-bar{
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }
    .progress .progress-right{ right: 0; }
    .progress .progress-right .progress-bar{
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-1 1.8s linear forwards;
    }
    .progress .inner-circle,
    .progress .progress-value{
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 5px solid #8e8e8e;
        font-size: 18px;
        font-weight: bold;
        line-height: 50px;
        text-align: center;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 1;
    }
    .progress .inner-circle:after{
        content: "";
        width: 5px;
        height: 60px;
        background: #8e8e8e;
        margin: 0 auto;
        position: absolute;
        top: -60px;
        left: 0;
        right: 0;
        z-index: 2;
        transition: all 10s linear 0s;
    }
    .row1{
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(-1 * var(--bs-gutter-y));
        margin-right: calc(-.5 * var(--bs-gutter-x));
        margin-left: 50%;
    }
    .progress.blue .progress-bar{ border-color: #049dff; }
    .progress.blue .progress-value{ color: #049dff; }
    .progress.blue .progress-left .progress-bar{ animation: loading-2 1.5s linear forwards 1.8s; }
    .progress.blue .inner-circle{ animation: loading-6 3.8s ease forwards; }
    .progress.yellow .progress-bar{ border-color: #fdba04; }
    .progress.yellow .progress-value{ color: #fdba04; }
    .progress.yellow .progress-left .progress-bar{ animation: loading-3 1s linear forwards 1.8s; }
    .progress.yellow .inner-circle{ animation: loading-7 3.8s ease forwards; }
    .progress.pink .progress-bar{ border-color: #ed687c; }
    .progress.pink .progress-value{ color: #ed687c; }
    .progress.pink .progress-left .progress-bar{ animation: loading-4 0.4s linear forwards 1.8s; }
    .progress.pink .inner-circle{ animation: loading-8 3.8s ease forwards; }
    .progress.green .progress-bar{ border-color: #1abc9c; }
    .progress.green .progress-value{ color: #1abc9c; }
    .progress.green .progress-left .progress-bar{ animation: loading-5 1.2s linear forwards 1.8s; }
    .progress.green .inner-circle{ animation: loading-9 3.8s ease forwards; }
    @keyframes loading-1{
        0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        }
    }
    @keyframes loading-2{
        0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
        }
    }
    @keyframes loading-3{
        0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        }
    }
    @keyframes loading-4{
        0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
        }
    }
    @keyframes loading-5{
         0%{
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         100%{
         -webkit-transform: rotate(126deg);
         transform: rotate(126deg);
         }
    }
    @keyframes loading-6{
        0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        50%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        }
        100%{
        -webkit-transform: rotate(324deg);
        transform: rotate(324deg);
        }
    }
    @keyframes loading-7{
        0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        50%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        }
        100%{
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
        }
    }
    @keyframes loading-8{
        0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        50%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        }
        100%{
        -webkit-transform: rotate(216deg);
        transform: rotate(216deg);
        }
    }
    @keyframes loading-9{
        0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        50%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        }
        100%{
        -webkit-transform: rotate(306deg);
        transform: rotate(306deg);
        }
    }
    @media only screen and (max-width: 990px){
        .progress{ margin-bottom: 20px; }
    }
</style>
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{$dados->nome}}</h1>
            </div>
        </div>
    </section>
    <div>
        <div>
            <img src="{{$dados->img}}" class="d-block mx-lg-auto ajuste" alt="" width="800" height="720" loading="lazy">
        </div>
    </div>
    <div class="container">
        <div id="reviews" class="review-section">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="m-0">{{$numero_total}} Avaliações</h4>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <table class="stars-counters">
                        <tbody>
                            @foreach($todas_notas as $key=> $cada_nota)
                            <tr class="">
                                <td>
                                    <span>
                                        <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">{{$key}} Estrelas</button>
                                    </span>
                                </td>
                                <td class="progress-bar-container">
                                    <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                        <div class="fit-progressbar-background">
                                            @php
                                            $porcentagem = ($cada_nota != 0 && $numero_total != 0) ? ($cada_nota * 100) / $numero_total : 0;
                                            @endphp
                                            <span class="progress-fill" style="width: {{$porcentagem}}%;"></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="star-num">{{$cada_nota}}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row1">
                            <div class="col-md-3 col-sm-6">
                                <div class="progress yellow">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="inner-circle"></div>
                                    <div class="progress-value"><span>100</span>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="review-list">
            <ul>
                <li>
                    <div class="flex ">
                        <section class="gradient-custom">
                            <div class="container margin1">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-12 col-lg-10 col-xl-8">
                                        <div style='overflow-y: auto; overflow-x:hidden; max-height: 60vh;' id='comentarios' class="card">
                                            <div class="card-body p-4">
                                            <h4 class="text-center mb-4 pb-2">Comentários</h4>
                                            @if($avaliacoes)
                                                @foreach($avaliacoes as $cada_avaliacao)
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="d-flex flex-start mt-4">
                                                            <img class="rounded-circle shadow-1-strong me-3"
                                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp" alt="avatar" width="65"
                                                            height="65" />
                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                <div>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="mb-1">
                                                                            <b>{{$cada_avaliacao->name}}</b>
                                                                        </p>
                                                                        @auth
                                                                            <a id='abreModal-{{$cada_avaliacao->avaliacao_id}}' class='btn btn-success'><i class="fas fa-reply fa-xs"></i><span class="small">Responder</span></a>
                                                                        @endauth
                                                                    </div>
                                                                    <p class="small mb-0">
                                                                        {{$cada_avaliacao->comentario}}
                                                                    </p>
                                                                </div>
                                                                @if($cada_avaliacao->respostas)
                                                                    @foreach($cada_avaliacao->respostas as $cada_resposta)
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                            <img class="rounded-circle shadow-1-strong"
                                                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp" alt="avatar"
                                                                                width="65" height="65" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                                    <p class="mb-1">
                                                                                        <b> {{$cada_resposta->name}}</b>
                                                                                    </p>
                                                                                    </div>
                                                                                    <p class="small mb-0">
                                                                                        {{$cada_resposta->comentario}}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <div style='text-align:center'>
                                                    <p>Opa! Não encontramos comentários.</p>
                                                    <p>Seja o primeiro a comentar.</p>
                                                <div>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div style='display:none;' class='card' id='form-resposta'>
                                        <form id='resp' action ='{{route('adicionar-resposta')}}' method='POST' style='padding: 14px;'>
                                            @csrf
                                            <input type='hidden' name='id' value="{{$dados->local_id}}">
                                            <input type="hidden" id="avaliacao-modal" name='avaliacao_id'>
                                            <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Digite a sua resposta</label>
                                            <textarea name='comentario' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <button id='envia' style='margin-top: 2vh;'  class='btn btn-success'>Enviar</button>
                                            <button id='voltar' style='margin-top: 2vh;'  class='btn btn-danger'>Voltar</button>
                                        </form>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </section>                       
                    </div>
                        <!-- se o usuario estiver logado podera deixar comentarios sobre o local -->
                        @auth
                        <button type="button" class="btn btn-primary margem_botao" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Adicionar Comentário
                        </button>
                        @endauth
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sua opnião é importante !!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <textarea name='opiniao' class="form-control" placeholder="Digite sua opinição" id="floatingTextarea"></textarea>
                                        {{-- <label for="floatingTextarea"></label> --}}
                                    </div>
                                    
                                    <div style="margin-top: 50px; margin-bottom: 10px;">
                                            <h5>Avalie o local de acordo com sua experiência!</h5>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input checked class="form-check-input" type="radio" name="nota" id="inlineRadio0" value="0">
                                        <label class="form-check-label" for="inlineRadio0">0</label>
                                    </div>                                    
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota" id="inlineRadio3" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota" id="inlineRadio4" value="4">
                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota" id="inlineRadio5" value="5">
                                        <label class="form-check-label" for="inlineRadio5">5</label>
                                    </div>

                                    <div style="margin-top: 50px; margin-bottom: 10px;">
                                        <h5>Diga se esse local é seguro!</h5>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input checked class="form-check-input" type="radio" name="nota_bairro" id="inlineRadio6" value="0">
                                        <label class="form-check-label" for="inlineRadio6">0</label>
                                    </div>                                
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota_bairro" id="inlineRadio7" value="1">
                                        <label class="form-check-label" for="inlineRadio7">1</label>
                                        <input class="form-check-input" type="radio" name="nota" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota_bairro" id="inlineRadio8" value="2">
                                        <label class="form-check-label" for="inlineRadio8">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota_bairro" id="inlineRadio9" value="3">
                                        <label class="form-check-label" for="inlineRadio9">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota_bairro" id="inlineRadio10" value="4">
                                        <label class="form-check-label" for="inlineRadio10">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nota_bairro" id="inlineRadio11" value="5">
                                        <label class="form-check-label" for="inlineRadio11">5</label>
                                    </div>  
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                <button id='enviar' type="button" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</main>
<form id='form-opiniao' action="{{route('adicionar-comentario')}}">
<input type='hidden' name='id' value="{{$dados->local_id}}">
</form>
@endsection