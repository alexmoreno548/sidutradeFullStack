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

Route::get('/', 'welcomeController@index');

Route::get('notice', 'welcomeController@show');

Route::group(['prefix' => 'admin'], function () 
{

	 Route::get('clients', ['uses' => 'clientController@index', 'as' => 'client']);
	// Route::get('clients/{id}', ['uses' => 'clientController@show', 'as' => 'client']);
	 Route::get('providers', ['uses' => 'providerController@index', 'as' => 'provider']);
    Voyager::routes();
});


