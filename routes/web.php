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

Route::get('/','PagesController@index')->name('index');
Route::get('create','PagesController@create')->name('create');
Route::post('store','PagesController@store')->name('store');
Route::get('show/{id}','PagesController@show')->name('show');
Route::get('edit/{id}','PagesController@edit')->name('edit');
Route::post('update/{id}','PagesController@update')->name('update');
Route::get('delete/{id}','PagesController@delete')->name('delete');
Route::get('completed/{id}','PagesController@completed')->name('completed');
Route::get('/table','PagesController@table');
