<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/titanic', 'TitanicController@index')->name('titanic');
Route::get('/titanic/passenger/{id}', 'TitanicController@detail')->name('titanicDetail');
Route::get('/titanic/excel/{page}', 'TitanicController@excel')->name('titanicPaginatedExcel');

Route::get('/{profile}', 'ProfilesController@show');
Route::get('/{profile}/edit', ['as' => 'profile.edit', 'uses' => 'ProfilesController@edit']);
Route::post('/{profile}/edit', ['as' => 'profile.update', 'uses' => 'ProfilesController@update']);
