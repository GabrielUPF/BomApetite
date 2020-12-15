<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Iten;
use App\Pedido;

class PedidosController extends Controller
{
	public function create() {
        $pedidos = Pedido::all();
		return view('pedidos.create', compact('pedidos'));
	}

    public function store(Request $request){
        $pedido = Pedido::create([
                            'mesa' => $request->get('mesa')
                                                    ]);

        $produtos = $request->produtos;
        foreach($produtos as $p => $value) {
            Iten::create([
                            'pedido_id' => $pedido->id,
                            'produto_id' => $produtos[$p]
                        ]);
        }

        return redirect()->route('pedidos');
    }

    public function index(){
        $pedidos = Pedido::all();

        return view('pedidos.index', ['pedidos'=>$pedidos]);
    }
}