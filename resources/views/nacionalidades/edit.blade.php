@extends('adminlte::page')

@section('content')
<h3>Editando Nacionalidade : {{$nacionalidade->descricao}}</h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

{!!Form::open(['route'=> ["nacionalidades.update",'id'=>$nacionalidade->id], 'method'=>'put']) !!}

	<div class="form-group">
		{!! Form::label('descricao', 'Descricao:') !!}
		{!! Form::text('descricao', $nacionalidade->descricao, ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Editar Nacionalidade', ['class'=>'btn btn-primary']) !!}
		{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
	</div>

{!!Form::close()!!}

@stop