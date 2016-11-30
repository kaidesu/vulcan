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
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // Agent
    Route::group(['prefix' => 'domains'], function() {
        Route::get('/', 'DomainController@index')->name('domains.index');
        Route::get('create', 'DomainController@create')->name('domains.create');;
        Route::post('/', 'DomainController@store')->name('domains.store');;
        Route::get('{id}/edit', 'DomainController@edit')->name('domains.edit');;
        Route::patch('{id}', 'DomainController@update')->name('domains.update');;
        Route::delete('{id}', 'DomainController@delete')->name('domains.delete');;

        Route::group(['prefix' => '{domainID}/listeners'], function() {
            Route::get('/', 'ListenerController@index')->name('listeners.index');
            Route::get('create', 'ListenerController@create')->name('listeners.create');
            Route::post('/', 'ListenerController@store')->name('listeners.store');
            Route::get('{id}/edit', 'ListenerController@edit')->name('listeners.edit');
            Route::patch('{id}', 'ListenerController@update')->name('listeners.update');
            Route::delete('{id}', 'ListenerController@delete')->name('listeners.delete');

            Route::group(['prefix' => '{listenerID}/responses'], function() {
                Route::get('/', 'ResponseController@index')->name('responses.index');
                Route::get('create', 'ResponseController@create')->name('responses.create');
                Route::post('/', 'ResponseController@store')->name('responses.store');
                Route::get('{id}/edit', 'ResponseController@edit')->name('responses.edit');
                Route::patch('{id}', 'ResponseController@update')->name('responses.update');
                Route::delete('{id}', 'ResponseController@delete')->name('responses.delete');
            });
        });
    });

    Route::get('chat', 'ChatController@index')->name('chat');
});
