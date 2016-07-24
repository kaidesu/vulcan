<?php

/**
 * Installer
 */

Route::group(['prefix' => 'install'], function() {
    // Welcome
    Route::get('/', 'Installer\WelcomeController@index');

    // Environment Configuration
    Route::get('environment', 'Installer\EnvironmentController@index');
    Route::post('environment', 'Installer\EnvironmentController@store');

    // Server Requirements
    Route::get('requirements', 'Installer\RequirementsController@index');
});

Route::get('/', 'DashboardController@index');

Route::group(['prefix' => 'api/v1'], function() {
    Route::post('response', 'APIController@respond');
});
