<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\Elokaily\Public\Controllers'], function () {
   Route::get("", 'HomeController@index');
});
