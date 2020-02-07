<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/user','UserController');

Route::get('/table/user','UserController@dataTable')->name('table.user');