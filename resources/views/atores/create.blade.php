@extends('adminlte::page')

@section('content')
<h3>Novo Ator</h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

{!!Form::open(['url'=>'atores/store'])!!}

	<div class="form-group">
		{!! Form::label('nome', 'Nome:') !!}
		{!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('nacionalidade', 'Nacionalidade:') !!}
		{!! Form::select('nacionalidade',
		array( 'BRA'=>'Brasileiro',
		'USA'=>'Americano',
		'CAN'=>'Canadense',
		'ARG'=>'Argentino'),
		'BRA', ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('dt_nascimento', 'Data de Nascimento:') !!}
		{!! Form::date('dt_nascimento', null, ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('inicio_atividades', 'Início das Atividades:') !!}
		{!! Form::date('inicio_atividades', null, ['class'=>'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Criar Ator', ['class'=>'btn btn-primary']) !!}
		{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
	</div>

{!!Form::close()!!}

@stop