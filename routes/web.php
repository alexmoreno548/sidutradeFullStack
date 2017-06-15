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

Route::get('/', 'welcomeController@index')->name('welcome');

Route::get('notice/{id}', 'welcomeController@show');

Route::group(['prefix' => 'admin'], function () 
{

	Route::get('clients', ['uses' => 'clientController@index', 'as' => 'clients.index']);


	// Route::get('clients/{id}', ['uses' => 'clientController@show', 'as' => 'client']);
	Route::get('providers', ['uses' => 'providerController@index', 'as' => 'providers.index']);


	Voyager::routes();
	
});
	
Route::post('clients', 'clientController@store')->name('clients.store');

Route::post('providers', 'providerController@store')->name('providers.store');

Route::resource('pan', 'clientController');

Route::get('/{file}' , 'clientController@file')->name('fileClient');

Route::get('/{file}' , 'providerController@file')->name('fileProvider');