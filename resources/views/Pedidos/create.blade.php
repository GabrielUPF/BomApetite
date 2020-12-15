@extends ('adminlte::page')

@section('content')

<div class= "card">
    <div class= "card-header" style="background: lightgrey">
	    <h3>Novo Pedido</h3>
    </div>

    <div class= "card-body">

	{!! Form::open(['route'=>'pedidos.store']) !!}
	

		<div class="form-group">
		{!! Form::label('mesa', 'Mesa:') !!}
			{!! Form::select('mesa', 
							 array( 'MESA 1'=>'MESA 1',
							 		'MESA 2'=>'MESA 2', 
							 		'MESA 3'=>'MESA 3',
									'MESA 4'=>'MESA 4',
									'MESA 5'=>'MESA 5',
									'MESA 6'=>'MESA 6',
									'MESA 7'=>'MESA 7',
							 		'MESA 8'=>'MESA 8'),
							 'MESA 1', ['class'=>'form-control', 'required']) !!}
		</div>
        <hr />

        <h4>Produtos</h4>
        <div class="input_fields_wrap"></div>
        <br>

        <button style="float:right" class="add_field_button btn btn-default">Adicionar Produto</button>

        <br>
        <hr />
		<div class="form-group">
			{!! Form::submit('Criar Pedido', ['class'=>'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}
@stop

@section('js')
	<script>
		$(document).ready(function(){
			var wrapper = $(".input_fields_wrap");
			var add_button = $(".add_field_button");
			var x=0;
			$(add_button).click(function(e){
			x++;
			var newField = '<div><div style="width:94%; float:left" id="produto">{!! Form::select("produtos[]", \App\Produto::orderBy("descricao")->pluck("descricao","id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione um produto"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
			$(wrapper).append(newField);
			});
			$(wraper).on("click",".remove_field", function(e){
				e.preventDefault();
				$(this).parent('div').remove();
				x--;
			});
		})
	</script>
@stop