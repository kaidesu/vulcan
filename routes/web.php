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

Auth::routes();

Route::middleware(['auth', 'auth.email'])->get('/', 'HomeController@index')->name('home');
    
Route::get('/register/confirm', 'Auth\RegisterConfirmationController@index')->name('register.confirm');
