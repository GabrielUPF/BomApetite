@extends('layouts.default')

@section('content')
	<h1> Funcionarios </h1>

	{!! Form::open(['name'=>'form_name', 'route'=>'funcionarios']) !!}
		<div calss="sidebar-form">
			<div class="input-group">
				<input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
				<span class="input-group-btn">
                	<button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
              	</span>
			</div>
		</div>
	{!! Form::close() !!}

	<br>		
		<table class="table table-stripe table-bordered table-hover">
			<thead>
				<th>Nome</th>
				<th>Função</th>
				<th>Ações</th>
			</thead>

			<tbody>

				@foreach($funcionarios as $funcionario)
					<tr>
						<td>{{ $funcionario->nome}}</td>
                        <td>{{ $funcionario->funcao->descricao}}</td>
						<td>
							<a href="{{ route('funcionarios.edit', ['id'=>$funcionario->id]) }}" class="btn-sm btn-success">Editar</a>
							<a href="#" onclick="return ConfirmaExclusao({{$funcionario->id}})"  class="btn-sm btn-danger">Remover</a>
						</td>
					<br>
				@endforeach
			</tbody>
		</table>
		
		{{ $funcionarios->links() }}

		
		<a href="{{ route('funcionarios.create', []) }}"  class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"funcionarios"
@endsection