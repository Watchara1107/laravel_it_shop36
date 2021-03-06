<?php

use Illuminate\Support\Facades\Route;

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

//route admin
Route::get('/admin/index','Admin\AdminController@index')->name('index');

//route category
Route::get('/admin/category/index','Admin\CategoryController@index')->name('category');

//route product
Route::get('/admin/product/index','Admin\ProductController@index')->name('product');


Auth::routes();
Route::get('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');
