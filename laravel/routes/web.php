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

Route::get('/','indexcontroller@index');
Route::get('/welcome','indexcontroller@welcome');  
Route::get('/article/{id}','indexcontroller@article');
Route::get('/posts','PostController@index');
Route::get('/orders','ordercontroller@index');


///////////////////////////////////////////روت های مربوط به دسته بندی ها
Route::get('/categories/create','categorycontroller@create')->name('create');
Route::get('/categories','categorycontroller@index')->name('categories');
Route::get('/categories/{category}','categorycontroller@show')->name('show');

Route::get('/categories/edit/{category}','categorycontroller@edit')->name('edit');
Route::get('/categories/destroy/{category}','categorycontroller@destroy')->name('destroy');

Route::post('/categories/store','categorycontroller@store')->name('store');
Route::put('/categories/update/{category}','categorycontroller@update')->name('update');


//Route::get('/index',function(){

    //return view('index');
//});

//Route::get('/welcome',function(){

   // return view('welcome');
//});