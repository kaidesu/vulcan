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
    Route::group(['prefix' => 'agents'], function() {
        Route::get('/', 'AgentController@index');
        Route::get('create', 'AgentController@create');
        Route::post('/', 'AgentController@store');
        Route::get('{id}/edit', 'AgentController@edit');
        Route::patch('{id}', 'AgentController@update');
        Route::delete('{id}', 'AgentController@delete');
    });

    Route::get('home', 'HomeController@index');
    Route::get('home/search', 'HomeController@search');
});
