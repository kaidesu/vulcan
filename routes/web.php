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

/**
 * Authentication
 */

Auth::routes();

/**
 * Application
 */

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'DashboardController@index');

    // Agent
    Route::group(['prefix' => 'domains'], function() {
        Route::get('/', 'DomainController@index');
        Route::get('create', 'DomainController@create');
        Route::post('/', 'DomainController@store');
        Route::get('{id}/edit', 'DomainController@edit');
        Route::patch('{id}', 'DomainController@update');
        Route::delete('{id}', 'DomainController@delete');

        Route::group(['prefix' => '{domainID}/triggers'], function() {
            Route::get('/', 'TriggerController@index');
            Route::get('create', 'TriggerController@create');
            Route::post('/', 'TriggerController@store');
            Route::get('{id}/edit', 'TriggerController@edit');
            Route::patch('{id}', 'TriggerController@update');
            Route::delete('{id}', 'TriggerController@delete');
        });
    });

    Route::get('chat', 'ChatController@index');
});
