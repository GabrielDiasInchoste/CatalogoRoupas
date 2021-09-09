@extends('adminlte::page')

@section('content')
	<h1>Atores</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Data de Nascimento</th>
		</thead>

		<tbody>
			@foreach($atores as $ator)
				<tr>
					<td>{{ $ator->nome }}</td>
					<td>{{ $ator->dt_nascimento	}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop