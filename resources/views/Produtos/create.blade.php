@extends ('adminlte::page')

@section('content')

	<h3>Novo Produto</h3>

    @if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
    
	{!! Form::open(['route'=>'produtos.store']) !!}

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('categoria_id', 'Categoria:') !!}
			{!! Form::select('categoria_id',
			 \App\Categoria::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
			  null, ['class'=>'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', null, ['class'=>'btn btn-default']) !!}
		</div>


	{!! Form::close() !!}
@stop