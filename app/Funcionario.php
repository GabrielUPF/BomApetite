<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = "funcionarios";
    protected $fillable = ['nome','funcao_id'];

    public function funcao() {
        return $this->belongsTo("App\Funcao");
    }
}