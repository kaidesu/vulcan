<?php

Route::group(['prefix' => 'v1'], function() {
    Route::post('response', 'APIController@respond');
});
