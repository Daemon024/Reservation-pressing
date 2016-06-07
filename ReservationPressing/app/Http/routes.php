<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('commandes', 'CommandesController');
Route::resource('client', 'ClientController');
// Route::get('/dashboard', 'CommandesController@RecupCommandes');
// Route::get('/booking', 'CommandesController@priseReservation');
Route::auth();

Route::get('dashboard', [
    'middleware' => 'auth',
    'uses' => 'CommandesController@RecupCommandes'
]);

Route::get('account', [
    'middleware' => 'auth',
    'uses' => 'ClientController@ClientEdit'
]);

Route::get('booking', [
    'middleware' => 'auth',
    'uses' => 'CommandesController@priseReservation'
]);

Route::get('moncompte');
Route::get('/home', 'HomeController@index');
