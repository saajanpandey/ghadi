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

Route::resource('/ads', 'adsController');


//Route::get('/', function() {
//    return view('welcome');
//})->name('homepage');

Route::get('/','HomePageController@index')->name('homepage');


Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home/cart', 'cartController');
// Route::get('/home/cart', 'cartController@index')->name('cart.index');
// Route::delete('/home/cart/{id}', 'cartController@destroy')->name('cart.destroy');
// Route::get('/home/cart/{id}', 'cartController@show')->name('cart.show');
//Route

//Brand Routes
Route::get('/brand/create','BrandController@create')->name('brand.create');
Route::post('/brand/create','BrandController@store')->name('brand.store');
Route::get('/brand','BrandController@index')->name('brand.index');
Route::get('/brand/delete/{id}','BrandController@destroy')->name('brand.delete');


//Category Routes
Route::get('/category/create','CategoryController@create')->name('category.create');
Route::post('/category/create','CategoryController@store')->name('category.store');
Route::get('/category/delete/{id}','CategoryController@destroy')->name('category.delete');
Route::get('/category','CategoryController@index')->name('category.index');

//Admin Routes
Route::get('/admin/signin','Admin\LoginController@showAdminLoginForm')->name('entry');
Route::post('/admin/signin', 'Admin\LoginController@adminLogin')->name('signin');
//Route::view('/admin', 'admin.dashboard');


Route::get('/admin', 'Admin\DashboardController@index')->name('admin.index');
//Route::post('/admin/register', 'Admin\RegisterController@createAdmin')->name('admin.reg');
//Route::get('/admin/register', 'Admin\RegisterController@showAdminRegisterForm');

//History
Route::get('/home/history', 'HistoryController@index')->name('history');


//User Routes
Route::get('/home/edit/{id}','HomeController@edit');
Route::post('/home/edit/{id}','HomeController@update')->name('user.update');
Route::get('/home/delete/{id}','HomeController@destroy')->name('user.delete');

//Search Routes
Route::get('/search','SearchController@index')->name('search');
