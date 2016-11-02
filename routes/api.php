<?php

use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('library', 'Api\ApiLibraryController', [
  'only' => ['show', 'store'],
]);
