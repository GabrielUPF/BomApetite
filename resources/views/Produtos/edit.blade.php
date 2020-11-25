@extends ('adminlte::page')

@section('content')

	<h3>Editando Produto: {{ $produto->nome }} </h3>

    @if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
    
	{!! Form::open(['route'=>["produtos.update", 'id'=>$produto->id], 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', $produto->descricao, ['class'=>'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('categoria_id', 'Categoria:') !!}
			{!! Form::select('categoria_id',
			 \App\Categoria::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
			  $produto->categoria_id, ['class'=>'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Editar Produto', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>


	{!! Form::close() !!}
@stop