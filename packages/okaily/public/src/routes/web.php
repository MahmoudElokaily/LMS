<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\Elokaily\Public\Controllers' , 'as' => 'page.'], function () {
   Route::get("", 'HomeController@index')->name('home');
   Route::get("/about", 'HomeController@about')->name('about');
});
