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
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('admin', 'HomeController@admin');
Route::get('/', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');
Route::get('/startowa', 'PagesController@about');

Route::get('/show','AdminController@indexDwa');
Route::resource('adminpages','AdminController');
Route::resource('zamowienie','ZamowienieController');
Route::resource('products','ProductsController');

// koszyk

Route::post('/cart-add', 'CartController@addToCart');
Route::get('/cart-show', 'CartController@cartShow');
Route::post('/update-cart', 'CartController@updateCart');
Route::get('/delete-cart-product/{rowId}', 'CartController@removeCartProduct');


// koniec koszyka
