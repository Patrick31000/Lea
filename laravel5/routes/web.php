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
Route::get('plandusite', 'plandusiteController@plan');

Route::get('/', 'EventController@index');
Route::get('listall', 'listallController@index')->name('listall');
Route::get('contact', 'contactController@create');
Route::post('contact', 'contactController@store');

Route::group(['middleware'=>'Islogged'], function () {

	Route::get('/create', 'EventController@create');
	Route::post('/post/create', 'EventController@store');
	Route::get('/list', 'EventController@edit');
	Route::get('/delete/{id}', 'EventController@destroy')->name('delete');
	Route::get('/update/{id}', 'EventController@update')->name('update');
	Route::get('/show/{id}', 'EventController@show')->name('show');
	Route::get('bidform/{id}', 'BidController@show')->name('bidform');
});


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
