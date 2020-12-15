@extends ('adminlte::page')

@section('content')

	<h3>Editando Funcionario: {{ $funcionarios->nome }} </h3>

    @if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
    
	{!! Form::open(['route'=>["funcionarios.update", 'id'=>$funcionarios->id], 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', $funcionarios->nome, ['class'=>'form-control', 'required']) !!}
		</div>
        <div class="form-group">
			{!! Form::label('funcao_id', 'Função:') !!}
			{!! Form::select('funcao_id', 
							 \App\Funcao::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
							 $funcionarios->funcao_id, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Funcionario', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>


	{!! Form::close() !!}
@stop