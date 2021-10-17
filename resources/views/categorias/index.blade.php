@extends('layouts.default')

@section('content')
    <h1>Categorias</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nome }}</td>
                    <td>
                        <a href="{{ route('categorias.edit', ['id' => $categoria->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $categoria->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categorias->links('pagination::bootstrap-4') }}

    <a href="{{ route('categorias.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
    "categorias"
@endsection
