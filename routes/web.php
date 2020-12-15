<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
Route::group(['prefix'=>'categoria', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'categoria',             'uses'=>'CategoriaController@index']);
    Route::get('create',        ['as'=>'categoria.create',      'uses'=>'CategoriaController@create']);
    Route::get('{id}/destroy',  ['as'=>'categoria.destroy',     'uses'=>'CategoriaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'categoria.edit',        'uses'=>'CategoriaController@edit']);
    Route::put('{id}/update',   ['as'=>'categoria.update',      'uses'=>'CategoriaController@update']);
    Route::post('store',        ['as'=>'categoria.store',       'uses'=>'CategoriaController@store']);

});

Route::group(['prefix'=>'funcaos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'funcaos',         'uses'=>'FuncaosController@index'  ]);
    Route::get('create',       ['as'=>'funcaos.create',  'uses'=>'FuncaosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'funcaos.destroy', 'uses'=>'FuncaosController@destroy']);
    Route::get('{id}/edit',    ['as'=>'funcaos.edit',    'uses'=>'FuncaosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'funcaos.update',  'uses'=>'FuncaosController@update' ]);
    Route::post('store',       ['as'=>'funcaos.store',   'uses'=>'FuncaosController@store'  ]);
});

Route::group(['prefix'=>'funcionarios', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'funcionarios',             'uses'=>'FuncionariosController@index']);
    Route::get('create',        ['as'=>'funcionarios.create',      'uses'=>'FuncionariosController@create']);
    Route::get('{id}/destroy',  ['as'=>'funcionarios.destroy',     'uses'=>'FuncionariosController@destroy']);
    Route::get('{id}/edit',     ['as'=>'funcionarios.edit',        'uses'=>'FuncionariosController@edit']);
    Route::put('{id}/update',   ['as'=>'funcionarios.update',      'uses'=>'FuncionariosController@update']);
    Route::post('store',        ['as'=>'funcionarios.store',       'uses'=>'FuncionariosController@store']);

});

Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::any('',             ['as'=>'produtos',         'uses'=>'ProdutosController@index'  ]);
    Route::get('create',       ['as'=>'produtos.create',  'uses'=>'ProdutosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);
    Route::get('{id}/edit',    ['as'=>'produtos.edit',    'uses'=>'ProdutosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'produtos.update',  'uses'=>'ProdutosController@update' ]);
    Route::post('store',       ['as'=>'produtos.store',   'uses'=>'ProdutosController@store'  ]);
});

Route::group(['prefix'=>'pedidos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',       ['as'=>'pedidos',        'uses'=>'PedidosController@index' ]);
    Route::get('create', ['as'=>'pedidos.create', 'uses'=>'PedidosController@create']);
    Route::post('store', ['as'=>'pedidos.store',  'uses'=>'PedidosController@store' ]);
});

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
