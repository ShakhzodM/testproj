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



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'verified'], function () {
	Route::get('/home', ['as'=>'home','uses'=>'HomeController@index']);
	Route::get('/my-blanks', ['uses'=>'BlankController@show', 'as'=>'show']);
	Route::match(['get', 'post'], '/add-blank', ['uses'=>'BlankController@add', 'as'=>'add']);

});
Route::get('/', ['uses'=>'IndexController', 'as'=>'index']);