@extends('adminlte::page')

@section('content')
    <h3>Novo Sku</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'skus.store']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade:') !!}
        {!! Form::number('quantidade', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('preco', 'Preco:') !!}
        {!! Form::number('preco', null, ['class' => 'form-control', 'step' => 'required|numeric|between:0,99.99']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('produto_id', 'Produto:') !!}
        {!! Form::select('produto_id',\App\Models\Produto::orderBy('nome')->pluck('nome', 'id')->toArray(), null ,['class' => 'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Criar Sku', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@stop
