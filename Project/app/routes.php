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


Route::get('/categories/{slug}', array('uses' => 'ProductController@getByCategory'));
Route::post('/search', array('uses' => 'ProductController@getByQuery'));
Route::post('/new-order/{id}', array('uses' => 'OrderController@addOrder'));
Route::get('/product/detail/{slug}', array('uses' => 'ProductController@getBySlug'));

Route::get('/admin/new-product', array('uses' => 'ProductController@addProductView'));
Route::post('/admin/new-product', array('uses' => 'ProductController@addProduct'));
Route::get('/admin/edit/{slug}', array('uses' => 'ProductController@editProductView'));
Route::post('/admin/edit/{slug}', array('uses' => 'ProductController@editProduct'));
Route::get('/admin/delete/product/{id}', array('uses' => 'ProductController@deleteProduct'));

Route::get('/admin/categories', array('uses' => 'CategoryController@listCategories'));
Route::get('/admin/delete/category/{id}', array('uses' => 'CategoryController@deleteCategory'));
Route::post('/admin/new-category', array('uses' => 'CategoryController@addCategory'));
Route::get('/admin/list-orders', array('uses' => 'OrderController@listOrders'));
Route::get('/admin/order-detail/{id}', array('uses' => 'OrderController@orderDetail'));

Route::get('/admin/manager-list', array('uses' => 'UserController@listUsers'));
Route::get('/admin/add-manager', array('uses' => 'UserController@addManagerView'));
Route::post('/admin/add-manager', array('uses' => 'UserController@addManager'));