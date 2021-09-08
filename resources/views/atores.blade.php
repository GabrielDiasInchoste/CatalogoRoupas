@extends('adminlte::page')

@section('content')
	@foreach($atores as $ator)
		<li> {{ $ator->nome }}</li>
		<li> {{ $ator->dt_nascimento }}</li>
		<br>
	@endforeach
@stop

