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

Route::get('/', function() {
	return view('frontpage');
});

Route::get('/notebooks', 'NotebookController@index')->name('notebooks.index');
Route::post('/notebooks', 'NotebookController@store');
Route::get('/notebooks/create', 'NotebookController@create');
Route::get('/notebooks/{notebooks}', 'NotebookController@edit');
Route::put('/notebooks/{notebooks}', 'NotebookController@update');
Route::delete('/notebooks/{notebooks}', 'NotebookController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
