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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Person Routes*/

Route::middleware(['auth'])->group(function() { 
	
	//Roles
	Route::resource('roles', 'RoleController');

	//Videos
	Route::post('videos/store', 'VideosController@store')->name('videos.store')
		 ->middleware('permission:videos.create');

	Route::get('videos', 'VideosController@index')->name('videos.index')
		 ->middleware('permission:videos.index');

	Route::get('videos/create', 'VideosController@create')->name('videos.create')
		 ->middleware('permission:videos.create');

	Route::put('videos/{videos}', 'VideosController@update')->name('videos.update')
		 ->middleware('permission:videos.edit');

	Route::get('videos/{videos}', 'VideosController@show')->name('videos.show')
		 ->middleware('permission:videos.show');

	Route::delete('videos/{videos}', 'VideosController@destroy')->name('videos.destroy')
		 ->middleware('permission:videos.destroy');

	Route::get('videos/{videos}/edit', 'VideosController@edit')->name('videos.edit')
		 ->middleware('permission:videos.edit');

	//Users
	Route::get('users', 'UserController@index')->name('users.index')
		 ->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		 ->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		 ->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		 ->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		 ->middleware('permission:users.edit');



});