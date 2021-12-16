<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Product_type;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','WelcomeController@index')->name('welcome');


//admin
Route::get('/admin/index','AdminController@index')->name('index');

//Content1
Route::get('/admin/content1','Content1Controller@index')->name('content1form');
Route::post('/admin/content1/create','Content1Controller@create')->name('content1_c');
Route::get('/admin/content1/Edit/{id}','Content1Controller@edit');
Route::post('/admin/content1/Update/{id}','Content1Controller@update');
Route::get('/admin/content1/Delete/{id}','Content1Controller@delete');





//Category
Route::get('/admin/category','CategoryController@index')->name('product_typeform');
Route::post('/admin/category/create','CategoryController@create')->name('creat');
Route::get('/admin/category/Edit/{id}','CategoryController@edit');
Route::post('/admin/category/Update/{id}','CategoryController@update');
Route::get('/admin/category/Delete/{id}','CategoryController@delete');

//Product
Route::get('/admin/product','ProductController@index')->name('productform');
Route::post('/admin/product/create','ProductController@create')->name('product_c');
Route::get('/admin/product/edit/{id}','ProductController@edit');
Route::post('/admin/product/update/{id}','ProductController@update');
Route::get('/admin/product/delete/{id}','ProductController@delete');

//Background
Route::get('/admin/background','BackgroundController@index')->name('backgroundform');
Route::post('/admin/background/create','BackgroundController@create')->name('background_c');
Route::get('/admin/background/Edit/{id}','BackgroundController@edit');
Route::post('/admin/background/Update/{id}','BackgroundController@update');
Route::get('/admin/background/Delete/{id}','BackgroundController@delete');

//Organizer
Route::get('/admin/organizer','OrganizerController@index')->name('organizerform');

//Users
Route::get('/admin/user','UserController@index')->name('userform');
Route::get('/admin/user/edit/{id}','UserController@edit');
Route::post('/admin/user/update/{id}','UserController@update');
Route::get('/admin/user/delete/{id}','UserController@delete');

Auth::routes();
Route::get('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');
