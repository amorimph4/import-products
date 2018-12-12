<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:api'], function (){

	Route::get('/all-products', function (Request $request) {
	    return App\Http\Resources\ProductResource::collection(\App\Product::All());
	});

	Route::get('/product/{product}', function (\App\Product $product, Request $request) {
	    return new App\Http\Resources\ProductResource($product);
	});

	Route::post('/update-product/{product}', 'ProductController@update');
	Route::post('/import', 'ProductController@importFiles')->name('import');
	Route::post('/delete-product/{product}', 'ProductController@destroy');
});


Route::post('/login', function ( Request $request) {
	try {
		$token = \Auth::guard('api')->attempt($request->only(['email', 'password']));
		if (!$token) {
			return response()->json([
				'error' => 'Credential Invalid'
			], 400);
		}
	    return ['token' => $token];
	}catch (\Exception $e){
		return response()->json($e->getMessage());
	}
});
