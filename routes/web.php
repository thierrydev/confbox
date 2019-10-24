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
    return view('main');
});

//Route::view('/event', 'EventController@index');

Route::get('/all',function () {
    return view('results');
});

// Route::get('/all,'results');

Route::resource('event', 'EventController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/event/{id}/edit', 'UserController@edit');

Route::get('validateEvent/{id}','EventController@validateEvent');
Route::get('validatedEvents','EventController@showValidatedEvents');