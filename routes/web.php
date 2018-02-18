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

Route::get('/', 'weddingController@index');

Route::group(["middleware" => "admin"], function(){

	Route::get('/admin', 'AdminController\adminController@index');

	Route::get('/admin/home', 'AdminController\homeController@index');

	Route::put('/admin/home/store', 'AdminController\homeController@store');

	Route::get('/admin/gallery', 'AdminController\galleryController@index');

	Route::post('/admin/gallery', 'AdminController\galleryController@store');

	Route::get('/admin/gallery/delete/{id}', 'AdminController\galleryController@indexdelete');

	Route::get('/admin/gallery/{id}', 'AdminController\galleryController@indexSingle');

	Route::match(['post', 'delete'],'/admin/gallery/{id}', 'AdminController\galleryController@upload');

	Route::get('/admin/paket', 'AdminController\paketController@paket');

	Route::post('/admin/paket', 'AdminController\paketController@store');

	Route::get('/admin/paket/{id}', 'AdminController\paketController@edit');

	Route::put('/admin/paket/update/{id}', 'AdminController\paketController@update');

	Route::get('/admin/paket/delete/{id}', 'AdminController\paketController@delete');

});



Route::get('/paket/{name}', 'weddingController@paket');

Auth::routes();
