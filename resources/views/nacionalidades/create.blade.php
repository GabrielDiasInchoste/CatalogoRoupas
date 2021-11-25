@extends('adminlte::page')

@section('content')
    <h3>Novo Nacionalidade</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'nacionalidades.store']) !!}

    <div class="form-group">
        {!! Form::label('descricao', 'Descricao:') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Criar Nacionalidade', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@stop
