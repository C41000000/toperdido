@extends('layouts.main')
@section('title', Cadastro')

@section("content")



@php
	dd($estados);
@endphp


<form metho='post' enctype='multipart/form-data' action="cadastrarLocal">
	@csrf
	<select name='estado'>
		<option value="">Selecione um estado</option>
	@foreach(estados as estado)

	@endforeach
</form>





@endsection