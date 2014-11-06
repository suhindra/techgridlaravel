<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	if (Auth::check()) {
        return View::make('dashboard');
    } else {
        return View::make('login');
    }
});

Route::get('newbook', function()
{
	return View::make('newbook');
});

Route::post('book/insert', 'BookController@store');

Route::get('book/edit/{id}', 'BookController@edit');

Route::get('booklist', function(){
	$books = Book::all();
	return View::make('listbook')->with('booksdata', $books);
});

Route::get('book/delete/{id}', 'BookController@delete');

Route::post('book/update', 'BookController@update');

Route::post('register', 'LoginController@register');

Route::post('login', 'LoginController@index');

Route::get('logout', 'LoginController@logout');