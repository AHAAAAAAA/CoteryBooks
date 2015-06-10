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

Route::get('/', 'HomeController@showWelcome');
Route::get('books', 'BookController@showBooks');
Route::get('add', 'AddController@showAdd');
Route::get('id', 'AuthorController@getAjax');
Route::get('authorname', 'AuthorController@getName');
Route::get('updateDB', 'DBController@update');
Route::get('info', 'InfoController@getAjax');
Route::get('debug', function(){
	foreach (Book::	get() as $book){
    	echo $book->title;
}


});
