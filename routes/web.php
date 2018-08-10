<?php

Route::get('/', 'HomeController@show')->name('home.show');

Route::get('/topic/{topic}', 'TopicsController@show')->name('topics.show');

Route::get('/admin', 'SessionsController@show')->name('sessions.show');

Route::get('/admin/index', 'AdminController@show')->name('admin.show');
