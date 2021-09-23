@extends('adminlte::page')

@section('content')
	<h1>Produtos</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Data de Nascimento</th>
		</thead>

		<tbody>
			@foreach($produtos as $produto)
				<tr>
					<td>{{ $produto->nome }}</td>
					<td>{{ $produto->dt_nascimento	}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop