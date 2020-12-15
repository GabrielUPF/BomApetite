<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcao extends Model

{
    protected $table = "funcaos";
    protected $fillable = ['descricao'];
	
	public function funcionarios() {
		return $this->hasMany("App\Funcionario");
	}

}

