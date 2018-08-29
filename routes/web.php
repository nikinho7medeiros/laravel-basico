<?php

Route::get('/painel/produtos/testes', 'painel\ProdutoController@tests');

Route::resource('/painel/produtos', 'painel\ProdutoController');

Route::group(['namespace' => 'site'],function () { 

	Route::get('/categoria/{id?}', 'SiteController@categoria');

 	Route::get('/contato', 'SiteController@contato');

	Route::get('/', 'SiteController@index');
});
