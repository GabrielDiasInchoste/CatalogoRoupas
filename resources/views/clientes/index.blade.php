@extends('layouts.default')

@section('content')
    <h1>Clientes</h1>

    {!! Form::open(['name' => 'form_name', 'route' => 'clientes']) !!}
    <div calss="sidebar-form">
        <div class="input-group">
            <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;"
                placeholder="Pesquisa...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-default"><i
                        class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
    {!! Form::close() !!}
    <br>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Nacionalidade</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->nacionalidade->descricao }}</td>

                    <td>
                        <a href="{{ route('clientes.edit', ['id' => $cliente->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $cliente->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $clientes->links('pagination::bootstrap-4') }}

    <a href="{{ route('clientes.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
    "clientes"
@endsection
