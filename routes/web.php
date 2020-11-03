<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'categoria', 'where'=>['id'=>'[0-9]+']], function() {
Route::get('',              ['as'=>'categoria',             'uses'=>'CategoriaController@index']);
Route::get('create',        ['as'=>'categoria.create',      'uses'=>'CategoriaController@create']);
Route::get('{id}/destroy',  ['as'=>'categoria.destroy',     'uses'=>'CategoriaController@destroy']);
Route::get('{id}/edit',     ['as'=>'categoria.edit',        'uses'=>'CategoriaController@edit']);
Route::put('{id}/update',   ['as'=>'categoria.update',      'uses'=>'CategoriaController@update']);
Route::post('store',        ['as'=>'categoria.store',       'uses'=>'CategoriaController@store']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
