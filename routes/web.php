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

Route::resource('adminpages','AdminController');
Route::resource('products','ProductsController');


