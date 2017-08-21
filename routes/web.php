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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('articles', 'ArticlesController');

Route::get('/', 'HomeController@index'); // so when you logged out it go back 
Route::get('/home', 'HomeController@index');

Route::bind('article', function($slug){
    return App\Article::where('name', $slug)->first();
});

// carrito ----------------

Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'CotizacionCartController@show'
]);
Route::get('cart/add/{article}', [
    'as' => 'cart-add',
    'uses' => 'CotizacionCartController@add'
]);
