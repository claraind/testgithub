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

Route::get('/', 'WelcomeController@index');

/*Route::get('/', function() 
{ 
    return 'hello laravel'; 
}); */


Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*Route::get('helloworld', function()
{ 
	return 'hello world from laravel framework';
}); 

Route::get('book','BookController@index');

Route::get('book/{judul}','BookController@viewJudul');

Route::get('bladeTest','HomeController@index');

Route::get('motor/{jenis}',function($jenis){ 
    return 'Motor dengan jenis : '.$jenis; 
}); */

// create an item
Route::post('test', function(){
	echo 'POSTED';
});

// read an item
Route::get('test', function(){
	//echo 'GET';
	echo '<form action="test" method="POST">';
	echo '<input type="submit" value="submit">';
	echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
	echo '<input type="hidden" name="_method" value="DELETE">';
	echo '</form>';
});

// update an item
Route::put('test', function(){
	echo 'PUT';
});

// update an item
Route::delete('test', function(){
	echo 'DELETED';
});
Route::get('restoran/{id}','RestoranController@show');
Route::get('menu/{id}','MenuController@show');
