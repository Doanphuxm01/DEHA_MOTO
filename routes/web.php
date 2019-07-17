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
    // return view('admin.pages.index');
    return view('welcome');
});
//trang quan tri admin
Route::group(['prefix' => 'admin'],function(){
	Route::get('/','AdminController@index');
	// Route::get('/list','AdminController@list')->name('Product.index');
	Route::resource('list','ProductController');
	
});
// Route::resource('hocsinh','HocsinhController');
// Route::resource('User','UserController');



