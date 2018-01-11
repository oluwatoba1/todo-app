<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('view', 'ItemController@view');

Route::post('view', 'ItemController@update');

Route::get('create', function(){

			return view('create');

	});
Route::post('create', 'ItemController@create');

Route::get('delete', 'ItemController@view_delete');
Route::post('delete', 'ItemController@delete');
