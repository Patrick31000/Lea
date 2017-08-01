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



Route::get('accueil', 'accueilController@acc');


Route::get('/', 'EventController@index');

Route::get('/create', 'EventController@create');
Route::post('/post/create', 'EventController@store');
Route::get('/list', 'EventController@edit');
Route::get('/delete/{id}', 'EventController@destroy')->name('delete');;

Route::get('/update/{id}', 'EventController@update')->name('update');
Route::get('/show/{id}', 'EventController@show')->name('show');;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
