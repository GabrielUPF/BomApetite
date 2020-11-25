<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    
	public function index() {
		$categorias = Categoria::orderBy('descricao')->paginate(5);
		return view('categoria.index', ['categorias'=>$categorias]);
	}

	public function create() {
		return view('categoria.create');
	}

	public function store(CategoriaRequest $request) {
		$novo_categoria = $request->all();
		Categoria::create($novo_categoria);

		return redirect()->route('categoria');
	}

	public function destroy($id) {
		try {
			Categoria::find($id)->delete();
			$ret = array('status'=>200, 'msg'=>"null");
		} catch (\Illuminate\Database\QueryException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		catch (\PDOException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
	}
	return $ret;
	
}

	public function edit($id) {
		$categoria = Categoria::find($id);
		return view('categoria.edit', compact('categoria'));
	}

	public function update(CategoriaRequest $request, $id) {
		Categoria::find($id)->update($request->all());
		return redirect()->route('categoria');
	}
}