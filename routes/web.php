<?php

use Illuminate\Support\Facades\Route;

///////////////////////////// main routes


Route::get('/', 'App\Http\Controllers\AppController@home')->name('home')->middleware('auth');

Route::get('/diary', 'App\Http\Controllers\AppController@diary')->name('diary')->middleware('auth');

Route::get('/profile', 'App\Http\Controllers\AppController@profile')->name('profile')->middleware('auth');


//////////////////////////// resources controller routes


Route::namespace('App\Http\Controllers')->group(function() {
    Route::resource('/user', 'UserController');
});

Route::namespace('App\Http\Controllers')->group(function() {
    Route::resource('/like', 'LikeController');
});

Route::namespace('App\Http\Controllers')->group(function() {
    Route::resource('/comment', 'CommentController');
});

Route::namespace('App\Http\Controllers')->group(function() {
    Route::resource('/note', 'NoteController');
});


//////////////////////////// auth routes


Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('login', 'AuthController@login')->name('login');
    Route::get('authenticate', 'AuthController@authenticate')->name('authenticate');
    Route::get('logout', 'AuthController@logout')->name('logout');
});