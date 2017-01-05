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

//Route::get('/', function () {
	//$people = ['Mark', 'Armel', 'Vito'];
    //return view('welcome', compact('people'));
//});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('single', 'PagesController@single');

Route::get('blogs', 'BlogsController@index');

Route::resource('posts', 'PostController');

Route::get('/home', 'ContentController@index')->name('contents.index');

Route::get('contents/{content}/edit', 'ContentController@edit')->name('contents.edit');

Route::patch('contents/{content}', 'ContentController@update')->name('contents.update');


