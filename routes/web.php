<?php

Auth::routes();

Route::group(['prefix' => 'management'], function () {
	Route::get('/', 'Admin\MainController@index')->name('admin::home');

	Route::get('/channels', 'Admin\ChannelController@index')->name('admin::channels.index');
	Route::get('/channel_create', 'Admin\ChannelController@create')->name('admin::channels.create');
	Route::post('/channel_create', 'Admin\ChannelController@save')->name('admin::channels.create');
	Route::get('/channel_edit/{id}', 'Admin\ChannelController@edit')->name('admin::channels.edit');
	Route::post('/channel_edit', 'Admin\ChannelController@save_edit')->name('admin::channels.edit');
	Route::get('/channel/delete/{id}', 'Admin\ChannelController@delete')->name('admin::channels.delete');
	Route::get('/channel_delete_thumbnail/{id}', 'Admin\ChannelController@delete_thumbnail')->name('admin::channels.delete_thumbnail');

	Route::get('/categories', 'Admin\CategoryController@index')->name('admin::categories.index');
	Route::get('/category_create', 'Admin\CategoryController@create')->name('admin::categories.create');
	Route::post('/category_create', 'Admin\CategoryController@save')->name('admin::categories.create');
	Route::get('/category_edit/{id}', 'Admin\CategoryController@edit')->name('admin::categories.edit');
	Route::post('/category_edit', 'Admin\CategoryController@save_edit')->name('admin::categories.edit');
	Route::get('/category/delete/{id}', 'Admin\CategoryController@delete')->name('admin::categories.delete');
	Route::get('/category_delete_thumbnail/{id}', 'Admin\CategoryController@delete_thumbnail')->name('admin::categories.delete_thumbnail');

	Route::get('/contents_game', 'Admin\ContentController@index_game')->name('admin::contents.game.index');
	Route::get('/content_create_game', 'Admin\ContentController@create_game')->name('admin::contents.game.create');
	Route::post('/content_create_game', 'Admin\ContentController@save_game')->name('admin::contents.game.create');

	Route::get('/contents_video', 'Admin\ContentController@index_video')->name('admin::contents.video.index');
	Route::get('/content_create_video', 'Admin\ContentController@create_video')->name('admin::contents.video.create');
	Route::post('/content_create_video', 'Admin\ContentController@save_video')->name('admin::contents.video.create');
	Route::get('/content_edit_video/{id}', 'Admin\ContentController@edit_video')->name('admin::contents.video.edit');
	Route::post('/content_edit_video', 'Admin\ContentController@update_video')->name('admin::contents.video.edit');
	Route::post('/content_upload_video', 'Admin\ContentController@upload_video')->name('admin::contents.video.upload');
	Route::get('/content_delete_video/{id}', 'Admin\ContentController@delete_video')->name('admin::contents.video.delete');
	Route::get('/content_settings_video', 'Admin\ContentController@video_settings')->name('admin::contents.video.settings');

	Route::get('/contents_app', 'Admin\ContentController@index_app')->name('admin::contents.app.index');
	Route::get('/content_create_app', 'Admin\ContentController@create_app')->name('admin::contents.app.create');
	Route::post('/content_create_app', 'Admin\ContentController@save_app')->name('admin::contents.app.create');

	Route::get('/contents_photo', 'Admin\ContentController@index_photo')->name('admin::contents.photo.index');
	Route::get('/content_create_photo', 'Admin\ContentController@create_photo')->name('admin::contents.photo.create');
	Route::post('/content_create_photo', 'Admin\ContentController@save_photo')->name('admin::contents.photo.create');

	Route::get('/thumbnail/{id}', 'Admin\ThumbnailController@generateForContent')->name('admin::thumbnails.generate');
	Route::get('/thumbnail_all', 'Admin\ThumbnailController@generateForAll')->name('admin::thumbnails.generate_all');

	Route::get('/banners', 'Admin\BannerController@index')->name('admin::banners.index');
	Route::get('/banner_create', 'Admin\BannerController@create')->name('admin::banners.create');
	Route::post('/banner_create', 'Admin\BannerController@save')->name('admin::banners.create');
	Route::get('/banner_edit/{id}', 'Admin\BannerController@edit')->name('admin::banners.edit');
	Route::post('/banner_edit', 'Admin\BannerController@save_edit')->name('admin::banners.edit');
	Route::get('/banner/delete/{id}', 'Admin\BannerController@delete')->name('admin::banners.delete');
});
