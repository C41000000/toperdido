@extends('layouts.main')
@section('title', 'Cadastro')

@section("content")



@php
	
@endphp

<div style='margin-top: 20%'>
<form method='post' enctype='multipart/form-data' action="{{route('cadastrarLocal')}}">
	@csrf
	<select name='estado'>
		<option value="">Selecione um estado</option>
	@foreach($estados as $estado)
		<option value='{{$estado->estado_id}}'>{{$estado->estado_nome}}</option>
	@endforeach
	</select>
	<input type='text' name='rua'>
	<input type='text' name='nome'>
	<button type='submit'>Salvar</button>

</form>
</div>




@endsection