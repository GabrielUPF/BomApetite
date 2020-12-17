@extends('layouts.default')

@section('content')
	<h1>Funções</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Descrição</th>
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($funcaos as $funcao)
				<tr>
					<td>{{ $funcao->descricao }}</td>
					<td>
						<a href="{{ route('funcaos.edit', ['id'=>\Crypt::encrypt($funcao->id)]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$funcao->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $funcaos->links() }}

	<a href="{{ route('funcaos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"funcaos"
@endsection