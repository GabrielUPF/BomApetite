@extends('layouts.default')

@section('content')
	<div class="container-fluid">
	    <h3>Pedidos</h3>

	    <table class="table table-striped table-bordered table-hover">
	    	<thead>
	    		<tr>
	    			<th>Pedido</th>
	    			<th>Mesa</th>
	    			<th>Produtos</th>
	    		</tr>
	    	</thead>

	    	<tbody>
		    	@foreach($pedidos as $pedido)
		    		<tr>
		    			<td>{{ $pedido->id}}</td>
				        <td>{{ $pedido->mesa}}</td>
				        <td>
				        	@foreach($pedido->produtos as $p)
				        		<li>{{ $p->produto->descricao }}</li>
				        	@endforeach
				        </td>
				    </tr>
			    @endforeach
			</tbody>
		</table>

		<a href="{{ route('pedidos.create', []) }}" class="btn btn-info">Adicionar</a>
	</div>
@stop

@section('table-delete')
"pedidos"
@endsection