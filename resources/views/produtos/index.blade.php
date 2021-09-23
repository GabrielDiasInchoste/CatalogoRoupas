@extends('layouts.default')

@section('content')
    <h1>Produtos</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ Carbon\Carbon::parse($produto->dt_nascimento)->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', ['id' => $produto->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $produto->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $produtos->links() }}

    <a href="{{ route('produtos.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
    "produtos"
@endsection
