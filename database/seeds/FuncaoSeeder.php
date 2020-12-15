<?php

use Illuminate\Database\Seeder;
use App\Funcao;

class FuncaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcao::create(['descricao' => 'Cozinheiro(a)']);
        Funcao::create(['descricao' => 'Garçom']);
        Funcao::create(['descricao' => 'Faxineiro(a)']);
        Funcao::create(['descricao' => 'Caixa']);
    }
}
