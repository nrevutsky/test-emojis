<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'mainController@input');
Route::get('/input', 'mainController@input');

Route::post('/emoji', 'mainController@create');
Route::get('/emoji', 'mainController@read');

Route::get('/output', 'mainController@output');