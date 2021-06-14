<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\AppController@home')->name('home')->middleware('auth');

Route::get('/diary', 'App\Http\Controllers\UserController@show');

Route::namespace('App\Http\Controllers')->group(function() {
    Route::resource('/user', 'UserController');
});

// auth routes

Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('login', 'AuthController@login')->name('login');
    Route::get('authenticate', 'AuthController@authenticate')->name('authenticate');
    Route::get('logout', 'AuthController@logout')->name('logout');
});