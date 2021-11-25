@extends('layouts.default')

@section('content')
	<div class="container-fluid">
	    <h3>Vendas</h3>

        {!! Form::open(['name' => 'form_name', 'route' => 'vendas']) !!}
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

	    <table class="table table-striped table-bordered table-hover">
	    	<thead>
	    		<tr>
	    			<th>Venda</th>
	    			<th>Cliente</th>
	    			<th>Skus</th>
	    		</tr>
	    	</thead>

	    	<tbody>
		    	@foreach($vendas as $venda)
		    		<tr>
		    			<td>{{$venda->nome}}</td>
                        <td>{{$venda->cliente->nome }}</td>
				        <td>
				        	@foreach($venda->skus as $s)
				        		<li>{{ $s->sku->nome }}</li>
				        	@endforeach
				        </td>
                        <td>
                        <a href="#" onclick="return ConfirmaExclusao({{ $venda->id }})"
                            class="btn-sm btn-danger">Remover</a></td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
        {{ $vendas->links('pagination::bootstrap-4') }}

		<a href="{{ route('vendas.create', []) }}" class="btn btn-info">Adicionar</a>
	</div>
@stop

@section('table-delete')
    "vendas"
@endsection