<?php

Route::get('/', function () {
	return view('home');
});

Route::get('/home', 'Admin\MainController@index')->name('admin::home');


Auth::routes();

Route::group(['prefix' => 'management'], function () {
	Route::get('/', 'Admin\MainController@index')->name('admin::home');

	Route::get('/types', 'Admin\TypeController@index')->name('admin::types.index');
	Route::get('/type_create', 'Admin\TypeController@create')->name('admin::types.create');
	Route::post('/type_create', 'Admin\TypeController@save')->name('admin::types.create');
	Route::get('/type_edit/{id}', 'Admin\TypeController@edit')->name('admin::types.edit');
	Route::post('/type_update', 'Admin\TypeController@update')->name('admin::types.update');
	Route::get('/type/delete/{id}', 'Admin\TypeController@delete')->name('admin::types.delete');

	Route::get('/buildings', 'Admin\BuildingController@index')->name('admin::buildings.index');
	Route::get('/building_create', 'Admin\BuildingController@create')->name('admin::buildings.create');
	Route::post('/building_create', 'Admin\BuildingController@save')->name('admin::buildings.create');
	Route::get('/building_edit/{id}', 'Admin\BuildingController@edit')->name('admin::buildings.edit');
	Route::post('/building_update', 'Admin\BuildingController@update')->name('admin::buildings.update');
	Route::get('/building/delete/{id}', 'Admin\BuildingController@delete')->name('admin::buildings.delete');

	Route::get('/floors', 'Admin\FloorController@index')->name('admin::floors.index');
	Route::get('/floor_create', 'Admin\FloorController@create')->name('admin::floors.create');
	Route::post('/floor_create', 'Admin\FloorController@save')->name('admin::floors.create');
	Route::get('/floor_edit/{id}', 'Admin\FloorController@edit')->name('admin::floors.edit');
	Route::post('/floor_update', 'Admin\FloorController@update')->name('admin::floors.update');
	Route::get('/floor/delete/{id}', 'Admin\FloorController@delete')->name('admin::floors.delete');

	Route::get('/rooms', 'Admin\RoomController@index')->name('admin::rooms.index');
	Route::get('/room_create', 'Admin\RoomController@create')->name('admin::rooms.create');
	Route::post('/room_create', 'Admin\RoomController@save')->name('admin::rooms.create');
	Route::get('/room_edit/{id}', 'Admin\RoomController@edit')->name('admin::rooms.edit');
	Route::post('/room_update', 'Admin\RoomController@update')->name('admin::rooms.update');
	Route::get('/room/delete/{id}', 'Admin\RoomController@delete')->name('admin::rooms.delete');

	Route::get('/responsibles', 'Admin\ResponsibleController@index')->name('admin::responsibles.index');
	Route::get('/responsible_create', 'Admin\ResponsibleController@create')->name('admin::responsibles.create');
	Route::post('/responsible_create', 'Admin\ResponsibleController@save')->name('admin::responsibles.create');
	Route::get('/responsible_edit/{id}', 'Admin\ResponsibleController@edit')->name('admin::responsibles.edit');
	Route::post('/responsible_update', 'Admin\ResponsibleController@update')->name('admin::responsibles.update');
	Route::get('/responsible/delete/{id}', 'Admin\ResponsibleController@delete')->name('admin::responsibles.delete');

	Route::get('/goods', 'Admin\GoodController@index')->name('admin::goods.index');
	Route::get('/good_create', 'Admin\GoodController@create')->name('admin::goods.create');
	Route::post('/good_create', 'Admin\GoodController@save')->name('admin::goods.create');
	Route::get('/good_edit/{id}', 'Admin\GoodController@edit')->name('admin::goods.edit');
	Route::post('/good_update', 'Admin\GoodController@update')->name('admin::goods.update');
	Route::get('/good/delete/{id}', 'Admin\GoodController@delete')->name('admin::goods.delete');
});
