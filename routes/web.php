<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return view('ui.home');
})->name('home');

Route::namespace('App\Http\Controllers')->group(function() {
    Route::resource('/user', 'UserController');
});

// auth routes

Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('login', 'AuthController@login')->name('login');
    Route::get('authenticate', 'AuthController@authenticate')->name('authenticate');
});