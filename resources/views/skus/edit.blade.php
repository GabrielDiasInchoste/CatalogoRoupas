@extends('adminlte::page')

@section('content')
<h3>Editando Sku : {{$sku->nome}}</h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

{!!Form::open(['route'=> ["skus.update",'id'=>$sku->id], 'method'=>'put']) !!}

	<div class="form-group">
		{!! Form::label('nome', 'Nome:') !!}
		{!! Form::text('nome', $sku->nome, ['class'=>'form-control', 'required']) !!}
	</div>

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade:') !!}
        {!! Form::number('quantidade', $sku->quantidade, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('preco', 'Preco:') !!}
        {!! Form::number('preco', $sku->preco, ['class' => 'form-control','step' => 'any']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('produto_id', 'Produto:') !!}
        {!! Form::select('produto_id',\App\Models\Produto::orderBy('nome')->pluck('nome', 'id')->toArray(), $sku->produto_id ,['class' => 'form-control', 'required']) !!}
    </div>
	
    </div>

	<div class="form-group">
		{!! Form::submit('Editar Sku', ['class'=>'btn btn-primary']) !!}
		{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
	</div>

{!!Form::close()!!}

@stop