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

Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' => false
]);

Route::get('/', 'HomeController@index')->name('home');

// Admin Routes
Route::get('/admin', 'AdminController@index')->name('admin.index');

// User Routes
Route::get('/user', 'UserController@index')->name('user.index');
