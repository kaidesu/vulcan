<?php


Route::post('/register', 'Auth\AuthController@register')->name('register');
Route::post('/login', 'Auth\AuthController@login')->name('login');
Route::post('/logout', 'Auth\AuthController@logout')->name('logout');

// Protect
Route::middleware(['auth.jwt'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/me', 'Auth\AuthController@user')->name('me');
});
