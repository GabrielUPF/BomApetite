@extends('layouts.default')

@section('content')
	<h1> Funcionarios </h1>

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
                        <td>{{ $funcionario->funcao}}</td>
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