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


Route::get('/', 'MainController@index')->name('main');
Route::get('/history', 'MainController@history')->name('history');
Route::post('/store-config','MainController@store')->name('store_config'); 
Route::get('/login-history','MainController@login_history')->name('login_history'); 

Route::post('/edit-config','MainController@edit_config')->name('edit_config'); 