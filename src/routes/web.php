<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Akp\Hello\Http'], function () {
    Route::get('/hello', 'HelloController@index');
});