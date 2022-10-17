@extends('layouts.main')
@section('title', 'Login')
<link rel="stylesheet" href="/css/login.css">
@section('content')
<div class="jumbotron">
    <div class="container-fluid">
        <h1 class="display-4">Login de Administrador</h1>
        
        
    </div>
</div>
@if(!$_SESSION['aaaaaa'])
   <p>morri</p>
@endif
<div id="form" >
<div class="container-fluid align-bottom ">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <form method="post" class="form text-dark" action="{{route('teste')}}" id="login_form">
                @csrf
                Email
                <br>
                <input type="text" class="rounded" name="email">
                <br>
                Senha
                <br>
                <input type="password" class="rounded" name="senha">
                <br><br>
                <input type="submit" value="Login" class="btn-dark rounded">
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
</div>
   
@endsection