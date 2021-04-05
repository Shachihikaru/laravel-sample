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
Route::get('/profile', 'ProfileController@index');
Route::get('/hobby', 'ProfileController@hobby');
Route::get('/bmi', 'BmiController@index');
Route::get('/bmi/calc', 'BmiController@calc');
Route::get('/blood', 'BloodController@blood');
Route::get('/blood/bloodtype', 'BloodController@bloodtype');
Route::get('/tax', 'TaxController@index');
Route::get('/tax/calc', 'TaxController@calc');
Route::get('/auto', 'AutoController@index');
Route::get('/auto/calc', 'AutoController@calc');
Route::get('/post', 'PostController@index');
Route::get('/post/store', 'PostController@store');
Route::get('/product', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::get('/product/store', 'ProductController@store');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::get('/product/update/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
