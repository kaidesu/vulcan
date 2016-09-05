<?php

/**
 * Installer
 */

Route::group(['prefix' => 'install', 'middleware' => 'abortIfInstalled'], function() {
    // Welcome
    Route::get('/', 'Installer\InstallController@welcome');
    Route::post('/', 'Installer\InstallController@install');

    // Environment Configuration
    Route::get('environment', 'Installer\EnvironmentController@index');
    Route::post('environment', 'Installer\EnvironmentController@store');

    // Server Requirements
    Route::get('requirements', 'Installer\RequirementsController@index');

    // Folder Permissions
    Route::get('permissions', 'Installer\PermissionsController@index');
});

Route::get('/', 'DashboardController@index');
