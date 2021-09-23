@extends('adminlte::page')

@section('content')
<h3>Editando Produto : {{$produto->nome}}</h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

{!!Form::open(['route'=> ["produtos.update",'id'=>$produto->id], 'method'=>'put']) !!}

	<div class="form-group">
		{!! Form::label('nome', 'Nome:') !!}
		{!! Form::text('nome', $produto->nome, ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('nacionalidade', 'Nacionalidade:') !!}
		{!! Form::select('nacionalidade',
		array( 'BRA'=>'Brasileiro',
		'USA'=>'Americano',
		'CAN'=>'Canadense',
		'ARG'=>'Argentino'),
		$produto->nacionalidade, ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('dt_nascimento', 'Data de Nascimento:') !!}
		{!! Form::date('dt_nascimento', $produto->dt_nascimento, ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('inicio_atividades', 'Início das Atividades:') !!}
		{!! Form::date('inicio_atividades', $produto->inicio_atividades, ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Editar Produto', ['class'=>'btn btn-primary']) !!}
		{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
	</div>

{!!Form::close()!!}

@stop