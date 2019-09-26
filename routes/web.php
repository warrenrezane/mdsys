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

// Main Redirect
Route::get('/', 'HomeController@index')->name('home');

// Admin Routes
Route::get('/admin', 'AdminController@index')->name('admin.index');

// Dentist Routes
Route::get('/dentist', 'DentistController@index')->name('dentist.index');

// SN Routes (Staff Nurse)
Route::get('/staff_nurse', 'SNController@index')->name('sn.index');

// MD Routes (Medical Doctor)
Route::get('/medical_doctor', 'MDController@index')->name('md.index');
