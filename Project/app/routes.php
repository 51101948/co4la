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

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/', array('uses' => 'ProductController@getAllProduct'));

Route::get('/login', array('uses' => 'UserController@loginView'));
Route::post('/login', array('uses' => 'UserController@login'));
Route::get('/logout', array('uses' => 'UserController@logout'));

Route::get('/product/detail/{id}', function($id){
	return View::make('productdetail');
});

Route::get('/categories/{slug}', array('uses' => 'ProductController@getByCategory'));
Route::post('/search', array('uses' => 'ProductController@getByQuery'));

Route::get('/admin/new-product', array('uses' => 'ProductController@addProductView'));
Route::post('/admin/new-product', array('uses' => 'ProductController@addProduct'));
