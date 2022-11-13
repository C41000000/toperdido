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
                                        <div class="card">
                                            <div class="card-body p-4">
                                            <h4 class="text-center mb-4 pb-2">Comentários</h4>
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
                                                                            Natalie Smith <span class="small">- 2 hours ago</span>
                                                                        </p>
                                                                        <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                                                                    </div>
                                                                    <p class="small mb-0">
                                                                    The standard chunk of Lorem Ipsum used since the 1500s is
                                                                    reproduced below for those interested. Sections 1.10.32 and
                                                                    1.10.33.
                                                                    </p>
                                                                </div>
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
                                                                            Lisa Cudrow <span class="small">- 4 hours ago</span>
                                                                        </p>
                                                                        </div>
                                                                        <p class="small mb-0">
                                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                                        scelerisque ante sollicitudin commodo. Cras purus odio,
                                                                        vestibulum in vulputate at, tempus viverra turpis.
                                                                        </p>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="d-flex flex-start mt-4">
                                                                    <a class="me-3" href="#">
                                                                    <img class="rounded-circle shadow-1-strong"
                                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(29).webp" alt="avatar"
                                                                        width="65" height="65" />
                                                                    </a>
                                                                    <div class="flex-grow-1 flex-shrink-1">
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="mb-1">
                                                                            Maggie McLoan <span class="small">- 5 hours ago</span>
                                                                        </p>
                                                                        </div>
                                                                        <p class="small mb-0">
                                                                        a Latin professor at Hampden-Sydney College in Virginia,
                                                                        looked up one of the more obscure Latin words, consectetur
                                                                        </p>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="d-flex flex-start mt-4">
                                                                    <a class="me-3" href="#">
                                                                    <img class="rounded-circle shadow-1-strong"
                                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                                                                        width="65" height="65" />
                                                                    </a>
                                                                    <div class="flex-grow-1 flex-shrink-1">
                                                                        <div>
                                                                            <div class="d-flex justify-content-between align-items-center">
                                                                            <p class="mb-1">
                                                                                John Smith <span class="small">- 6 hours ago</span>
                                                                            </p>
                                                                            </div>
                                                                            <p class="small mb-0">
                                                                            Autem, totam debitis suscipit saepe sapiente magnam officiis
                                                                            quaerat necessitatibus odio assumenda, perferendis quae iusto
                                                                            labore laboriosam minima numquam impedit quam dolorem!
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>                       
                        
                        {{-- <div>
                            @if($avaliacoes)
                                @foreach($avaliacoes as $cada_avaliacao)
                                    <div class="left">
                                        <span>
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="profile-pict-img img-fluid" alt="" />
                                        </span>
                                        <h4 class="margem1">{{$cada_avaliacao->name}}</h4>
                                    </div>

                                    <div class='right'>
                                        <div class='review-description'>
                                            <div class="tab">{{$cada_avaliacao->comentario}}</div>
                                        </div>
                                    </div>

                                    <hr class="featurette-divider">
                                @endforeach
                            @endif
                        </div> --}}
                        
                        {{-- <div class="right">
                            <h4>
                                Askbootstrap
                                <span class="gig-rating text-body-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                        <path
                                            fill="currentColor"
                                            d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                                        ></path>
                                    </svg>
                                    5.0
                                </span>
                            </h4>
                            <div class="country d-flex align-items-center">
                                <span>
                                    <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar6.png" />
                                </span>
                                <div class="country-name font-accent">India</div>
                            </div>
                            <div class="review-description">
                                <p>
                                    The process was smooth, after providing the required info, Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                                </p>
                            </div>
                            <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                            <div class="helpful-thumbs">
                                <div class="helpful-thumb text-body-2">
                                    <span class="fit-icon thumbs-icon">
                                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.5804 7.81165C13.8519 7.45962 14 7 14 6.43858C14 5.40843 13.123 4.45422 12.0114 4.45422H10.0932C10.3316 3.97931 10.6591 3.39024 10.6591 2.54516C10.6591 0.948063 10.022 0 8.39207 0C7.57189 0 7.26753 1.03682 7.11159 1.83827C7.01843 2.31708 6.93041 2.76938 6.65973 3.04005C6.01524 3.68457 5.03125 5.25 4.44013 5.56787C4.38028 5.59308 4.3038 5.61293 4.22051 5.62866C4.06265 5.39995 3.79889 5.25 3.5 5.25H0.875C0.391754 5.25 0 5.64175 0 6.125V13.125C0 13.6082 0.391754 14 0.875 14H3.5C3.98325 14 4.375 13.6082 4.375 13.125V12.886C5.26354 12.886 7.12816 14.0002 9.22728 13.9996C9.37781 13.9997 10.2568 14.0004 10.3487 13.9996C11.9697 14 12.8713 13.0183 12.8188 11.5443C13.2325 11.0596 13.4351 10.3593 13.3172 9.70944C13.6578 9.17552 13.7308 8.42237 13.5804 7.81165ZM0.875 13.125V6.125H3.5V13.125H0.875ZM12.4692 7.5565C12.9062 7.875 12.9062 9.1875 12.3159 9.48875C12.6856 10.1111 12.3529 10.9439 11.9053 11.1839C12.1321 12.6206 11.3869 13.1146 10.3409 13.1246C10.2504 13.1255 9.32247 13.1246 9.22731 13.1246C7.23316 13.1246 5.54296 12.011 4.37503 12.011V6.44287C5.40611 6.44287 6.35212 4.58516 7.27847 3.65879C8.11368 2.82357 7.83527 1.43153 8.3921 0.874727C9.78414 0.874727 9.78414 1.84589 9.78414 2.54518C9.78414 3.69879 8.94893 4.21561 8.94893 5.32924H12.0114C12.6329 5.32924 13.1223 5.88607 13.125 6.44287C13.1277 6.99967 12.9062 7.4375 12.4692 7.5565ZM2.84375 11.8125C2.84375 12.1749 2.54994 12.4688 2.1875 12.4688C1.82506 12.4688 1.53125 12.1749 1.53125 11.8125C1.53125 11.4501 1.82506 11.1562 2.1875 11.1562C2.54994 11.1562 2.84375 11.4501 2.84375 11.8125Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="thumb-title">Gostei</span>
                                </div>
                                <div class="helpful-thumb text-body-2 ml-3">
                                    <span class="fit-icon thumbs-icon">
                                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.419563 6.18835C0.148122 6.54038 6.11959e-07 7 5.62878e-07 7.56142C2.81294e-05 8.59157 0.876996 9.54578 1.98863 9.54578L3.90679 9.54578C3.66836 10.0207 3.34091 10.6098 3.34091 11.4548C3.34089 13.0519 3.97802 14 5.60793 14C6.42811 14 6.73247 12.9632 6.88841 12.1617C6.98157 11.6829 7.06959 11.2306 7.34027 10.9599C7.98476 10.3154 8.96875 8.75 9.55987 8.43213C9.61972 8.40692 9.6962 8.38707 9.77949 8.37134C9.93735 8.60005 10.2011 8.75 10.5 8.75L13.125 8.75C13.6082 8.75 14 8.35825 14 7.875L14 0.875C14 0.391754 13.6082 -3.42482e-08 13.125 -7.64949e-08L10.5 -3.0598e-07C10.0168 -3.48226e-07 9.625 0.391754 9.625 0.875L9.625 1.11398C8.73647 1.11398 6.87184 -0.000191358 4.77272 0.00038257C4.62219 0.000300541 3.74322 -0.000438633 3.65127 0.000382472C2.03027 -1.04643e-06 1.12867 0.981667 1.18117 2.45566C0.76754 2.94038 0.564868 3.64065 0.682829 4.29056C0.342234 4.82448 0.269227 5.57763 0.419563 6.18835ZM13.125 0.875L13.125 7.875L10.5 7.875L10.5 0.875L13.125 0.875ZM1.53079 6.4435C1.09375 6.125 1.09375 4.8125 1.6841 4.51125C1.31436 3.88891 1.64713 3.05613 2.09467 2.81605C1.86791 1.37941 2.61313 0.885417 3.65906 0.875355C3.74962 0.874535 4.67753 0.875355 4.77269 0.875355C6.76684 0.875355 8.45704 1.98898 9.62497 1.98898L9.62497 7.55713C8.5939 7.55713 7.64788 9.41484 6.72153 10.3412C5.88632 11.1764 6.16473 12.5685 5.6079 13.1253C4.21586 13.1253 4.21586 12.1541 4.21586 11.4548C4.21586 10.3012 5.05107 9.78439 5.05107 8.67076L1.9886 8.67076C1.36708 8.67076 0.877707 8.11393 0.874973 7.55713C0.872266 7.00033 1.09375 6.5625 1.53079 6.4435ZM11.1563 2.1875C11.1563 1.82506 11.4501 1.53125 11.8125 1.53125C12.1749 1.53125 12.4688 1.82506 12.4688 2.1875C12.4688 2.54994 12.1749 2.84375 11.8125 2.84375C11.4501 2.84375 11.1563 2.54994 11.1563 2.1875Z"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="thumb-title">Não Gostei</span>
                                </div>
                            </div>
                            <div class="response-item mt-4 d-flex">
                                <div class="left">
                                    <span>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="profile-pict-img img-fluid" alt="" />
                                    </span>
                                </div>
                                <div class="right">
                                    <h4>
                                        Gurdeep Osahan
                                        <span class="gig-rating text-body-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                                <path
                                                    fill="currentColor"
                                                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                                                ></path>
                                            </svg>
                                            5.0
                                        </span>
                                    </h4>
                                    <div class="country d-flex align-items-center">
                                        <span>
                                            <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar3.png" />
                                        </span>
                                        <div class="country-name font-accent">India</div>
                                    </div>
                                    <div class="review-description">
                                        <p>
                                            The process was smooth, after providing the required info, Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                                        </p>
                                    </div>
                                    <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                                </div>
                            </div>
                        </div> --}}
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