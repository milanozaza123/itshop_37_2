<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Product_type;
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

//admin
Route::get('/admin/index','AdminController@index')->name('index');

//Category
Route::get('/admin/category','CategoryController@index')->name('product_typeform');
Route::post('/admin/category/create','CategoryController@create')->name('creat');
Route::get('/admin/category/Edit/{id}','CategoryController@edit');
Route::post('/admin/category/Update/{id}','CategoryController@update');
Route::get('/admin/category/Delete/{id}','CategoryController@delete');

//Product
Route::get('/admin/product','ProductController@index')->name('productform');

Auth::routes();
Route::get('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');
