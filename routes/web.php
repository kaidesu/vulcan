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
Route::get('/register/confirm', 'Auth\RegisterConfirmationController@index')->name('register.confirm');

Route::middleware(['auth', 'auth.email'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/preface', 'HomeController@preface')->name('preface');

    Route::get('/modules', 'ModuleController@index')->name('modules.index');
});
