@extends('adminlte::page')

@section('content')
	<div class="card">
	    <div class="card-header" style="background: lightgrey">
	        <h3>Novo Venda</h3>
	    </div>

	    <div class="card-body">
	        {!! Form::open(['route' => 'vendas.store']) !!}

				<div class="form-group">
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome', null, ['class'=>'form-control', 'require']) !!}
				</div>

                <div class="form-group">
                    {!! Form::label('cliente_id', 'Cliente:') !!}
                    {!! Form::select('cliente_id',\App\Models\Cliente::orderBy('nome')->pluck('nome', 'id')->toArray(), null ,['class' => 'form-control', 'required']) !!}
                </div>
				<hr />

				<h4>Skus</h4>
				<div class="input_fields_wrap"></div>
				<br>

				<button style="float:right" class="add_field_button btn btn-default">Adicionar Sku</button>

				<br>
				<hr />

				<div class="form-group">
					{!! Form::submit('Criar Venda', ['class'=>'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}

	    </div>
	</div>
@stop

@section('js')
	<script>
		$(document).ready(function(){
			var wrapper = $(".input_fields_wrap");
			var add_button = $(".add_field_button");
			var x=0;
			$(add_button).click(function(e){
			x++;
			var newField = '<div><div style="width:94%; float:left" id="sku">{!! Form::select("skus[]", \App\Models\Sku::orderBy("nome")->pluck("nome","id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione um sku"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
			$(wrapper).append(newField);
		});
		$(wrapper).on("click",".remove_field", function(e){
			e.preventDefault(); 
			$(this).parent('div').remove(); 
			x--;
		});
		})
	</script>

@stop