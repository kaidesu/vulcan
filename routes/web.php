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

    Route::get('/settings', 'Settings\SettingsController@index')->name('settings');
    Route::get('/settings/profile', 'Settings\ProfileController@index')->name('settings.profile');
    Route::get('/settings/account', 'Settings\AccountController@index')->name('settings.account');
    Route::get('/settings/tokens', 'Settings\TokensController@index')->name('settings.tokens');
});

Route::get('/messages', 'MessageController@index');
Route::post('/messages', 'MessageController@store');
