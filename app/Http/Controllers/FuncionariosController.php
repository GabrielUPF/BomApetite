<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\FuncionarioRequest;

class FuncionariosController extends Controller
{
    
	public function index() {
		$funcionarios = Funcionario::orderBy('nome')->paginate(5);
		return view('funcionario.index', ['funcionarios'=>$funcionarios]);
	}

	public function create() {
		return view('funcionario.create');
	}

	public function store(FuncionarioRequest $request) {
		$novo_funcionario = $request->all();
		Funcionario::create($novo_funcionario);

		return redirect()->route('funcionarios');
	}

	public function destroy($id) {
		try {
			Funcionario::find($id)->delete();
			$ret = array('status'=>200, 'msg'=>"null");
		} catch (\Illuminate\Database\QueryException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		catch (\PDOException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
	}
	return $ret;
	
}

	public function edit(Request $request) {
		$funcionarios = Funcionario::find(\Crypt::decrypt($request->get('id')));
		return view('funcionario.edit', compact('funcionarios'));
	}

	public function update(FuncionarioRequest $request, $id) {
		Funcionario::find($id)->update($request->all());
		return redirect()->route('funcionarios');
	}
}