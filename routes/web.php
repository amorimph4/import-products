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
Route::get('/', 'ProductController@index');
Route::get('/all-products', 'ProductController@getAllProduct')->name('all_products');
Route::get('/get-product/{product}', 'ProductController@show')->name('get_product');
Route::post('/import', 'ProductController@importFiles')->name('import');
Route::post('/update-product/{product}', 'ProductController@update')->name('up_product');
Route::post('/delete-product/{product}', 'ProductController@destroy')->name('del_product');
Route::get('/download/{type}', 'ProductController@getTimes');

