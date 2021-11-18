@extends('layouts.default')

@section('content')
    <h1>Skus</h1>

    {!! Form::open(['name' => 'form_name', 'route' => 'skus']) !!}
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
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Produto</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach ($skus as $sku)
                <tr>
                    <td>{{ $sku->nome }}</td>
                    <td>{{ $sku->quantidade }}</td>
                    <td>{{ $sku->preco }}</td>
                    <td>{{ $sku->produto->nome }}</td>

                    <td>
                        <a href="{{ route('skus.edit', ['id' => $sku->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $sku->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $skus->links('pagination::bootstrap-4') }}

    <a href="{{ route('skus.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
    "skus"
@endsection
