<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iten extends Model
{
    protected $table = "itens";
    protected $fillable = ['produto_id', 'pedido_id'];

    public function produto() {
		return $this->belongsTo("App\Produto");
	}
}
