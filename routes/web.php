<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'CrudController@index');
Route::get('/add', 'CrudController@create'); //tampil form add
Route::post('/store', 'CrudController@store'); //insert data
Route::get('/read/{id}', 'CrudController@show'); //details

Route::get('/edit/{id}', 'CrudController@edit');
Route::post('/update/{id}', 'CrudController@update');

Route::get('/delete/{id}', 'CrudController@destroy');//delete
