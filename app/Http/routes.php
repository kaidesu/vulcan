<?php

Route::get('/', 'DashboardController@index');

Route::group(['prefix' => 'api/v1'], function() {
    Route::post('response', 'APIController@respond');
});
