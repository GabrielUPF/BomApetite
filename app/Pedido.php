<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";
    protected $fillable = ['mesa'];

    public function produtos() {
    return $this->hasMany("App\Iten");
    }

}
