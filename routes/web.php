<?php

Route::get('/', 'HomeController@show')->name('home.show');

Route::get('/home', function() {
    return redirect()->route('admin.show');
});

Route::get('/topic/{topic}', 'TopicsController@show')->name('topics.show');


Route::group(['middleware'=>'guest'], function() {
  Route::get('/admin', 'SessionsController@show')->name('sessions.show');
  Route::post('/admin', 'SessionsController@store')->name('login');
});




Route::group(['middleware' => 'auth'], function() {
  Route::get('/admin/index', 'AdminController@show')->name('admin.show');
  Route::delete('admin/delete/{topic}', 'AdminController@destroy')->name('admin.destroy');
  Route::get('admin/create', 'AdminController@create')->name('admin.create');
  Route::post('admin/create', 'AdminController@store')->name('admin.store');
  Route::post('upload_image', 'AdminController@uploadImage')->name('admin.upload_image');
  Route::delete('logout', 'SessionsController@destroy')->name('logout');
  Route::get('admin/edit/{topic}', 'AdminController@edit')->name('admin.edit');
  Route::put('admin/update/{topic}', 'AdminController@update')->name('admin.update');
});
