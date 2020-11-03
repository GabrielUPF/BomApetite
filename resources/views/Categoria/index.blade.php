@extends('layouts.default')

@section('content')
	<h1> Categorias </h1>
		<table class="table table-stripe table-bordered table-hover">
			<thead>
				<th>Descrição</th>
				<th>Ações</th>
			</thead>

			<tbody>

				@foreach($categorias as $categoria)
					<tr>
						<td>{{ $categoria->descricao}}</td>

						<td>
							<a href="{{ route('categoria.edit', ['id'=>$categoria->id]) }}" class="btn-sm btn-success">Editar</a>
							<a href="#" onclick="return ConfirmaExclusao({{$categoria->id}})"  class="btn-sm btn-danger">Remover</a>
						</td>
					<br>
				@endforeach
			</tbody>
		</table>
		
		{{ $categorias->links() }}

		
		<a href="{{ route('categoria.create', []) }}"  class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"categoria"
@endsection