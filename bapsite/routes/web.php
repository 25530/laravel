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

Route::get('/', 'HomeController@showHome');
Route::get('/contact', 'HomeController@contact');
Route::get('/contact/create', 'HomeController@create')->name('product.add');
Route::post('/contact/create', 'HomeController@store')->name('product.store');





//Route::get('/producten/{id}', 'ProductController@showProduct')-> where('id', '[0-9]+');

/*Route::prefix('admin')->group(function(){
    Route::get('users', function(){  return 'admin users';});
    Route::get('products', function(){  return 'admin products';});
    Route::get('categories', function(){  return 'admin categories';});
});
*/

