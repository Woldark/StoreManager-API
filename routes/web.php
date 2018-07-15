<?php

Auth::routes();

Route::group(['prefix' => 'management'], function () {
	Route::get('/', 'Admin\MainController@index')->name('admin::home');

	Route::get('/types', 'Admin\TypeController@index')->name('admin::types.index');
	Route::get('/type_create', 'Admin\TypeController@create')->name('admin::types.create');
	Route::post('/type_create', 'Admin\TypeController@save')->name('admin::types.create');
	Route::get('/type_edit/{id}', 'Admin\TypeController@edit')->name('admin::types.edit');
	Route::post('/type_edit', 'Admin\TypeController@save_edit')->name('admin::types.edit');
	Route::get('/type/delete/{id}', 'Admin\TypeController@delete')->name('admin::types.delete');
});
