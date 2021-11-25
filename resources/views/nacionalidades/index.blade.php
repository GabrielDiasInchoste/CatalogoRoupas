@extends('layouts.default')

@section('content')
    <h1>Nacionalidades</h1>

    {!! Form::open(['name' => 'form_name', 'route' => 'nacionalidades']) !!}
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
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach ($nacionalidades as $nacionalidade)
                <tr>
                    <td>{{ $nacionalidade->descricao }}</td>
                    <td>
                        <a href="{{ route('nacionalidades.edit', ['id' => $nacionalidade->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $nacionalidade->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $nacionalidades->links('pagination::bootstrap-4') }}

    <a href="{{ route('nacionalidades.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
    "nacionalidades"
@endsection
