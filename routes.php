<?php

Route::group(['prefix' => 'contenteditor'], function () {
    Route::post('image/upload', 'OnionCreative\ContentEditor\Http\Controllers\ImageController@upload');
    Route::post('image/save', 'OnionCreative\ContentEditor\Http\Controllers\ImageController@save');
});
