<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcao;
use App\Http\Requests\FuncaoRequest;

class FuncaosController extends Controller
{
	public function index() {
		$funcaos = Funcao::orderBy('descricao')->paginate(5);
		return view('funcao.index', ['funcaos'=>$funcaos]);
	}

	public function create() {
		return view('funcao.create');
	}

	public function store(FuncaoRequest $request) {
		$nova_funcao = $request->all();
		Funcao::create($nova_funcao);

		return redirect()->route('funcaos');
	}

	public function destroy($id) {
		try {
		    Funcao::find($id)->delete();
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
		$funcao = Funcao::find($id);
		return view('funcao.edit', compact('funcao'));
	}

	public function update(FuncaoRequest $request, $id) {
		Funcao::find($id)->update($request->all());
		return redirect()->route('funcaos');
	}
}