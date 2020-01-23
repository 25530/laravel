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

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/blog', 'dataController@list')->name('blog.add');
Route::get('/blog/details','dataController@details')->name('blog.details');
Route::post('/contact/create', 'HomeController@store')->name('product.store');
Route::get('/upload', 'UploadController@index')->name('upload');
Route::post('upload', 'UploadController@upload');



//Route::get('/producten/{id}', 'ProductController@showProduct')-> where('id', '[0-9]+');

/*Route::prefix('admin')->group(function(){
    Route::get('users', function(){  return 'admin users';});
    Route::get('products', function(){  return 'admin products';});
    Route::get('categories', function(){  return 'admin categories';});
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

