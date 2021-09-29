<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PageController@home')->name('home');
Route::get('/home', 'App\Http\Controllers\PageController@home');
Route::get('/watch', 'App\Http\Controllers\PageController@watch')->name('watch');
Route::get('/user', 'App\Http\Controllers\PageController@user')->middleware('auth')->name('user');
Route::get('/videos', 'App\Http\Controllers\PageController@videos')->middleware('auth')->name('videos');
Route::get('/history', 'App\Http\Controllers\PageController@history')->middleware('auth')->name('history');
Route::get('/likes', 'App\Http\Controllers\PageController@likes')->middleware('auth')->name('likes');
Route::get('/upload', 'App\Http\Controllers\PageController@upload')->middleware('auth')->name('upload');
Route::get('/settings', 'App\Http\Controllers\PageController@settings')->name('settings');
Route::get('/sign-up', 'App\Http\Controllers\PageController@sign_up')->middleware('guest')->name('sign-up-form');
Route::get('/sign-in', 'App\Http\Controllers\PageController@sign_in')->middleware('guest')->name('sign-in-form');

/* Auth */
Route::post('/sign-up', 'App\Http\Controllers\UserController@sign_up')->middleware('guest')->name('sign-up');
Route::post('/sign-in', 'App\Http\Controllers\UserController@sign_in')->middleware('guest')->name('sign-in');
Route::any('/logout', 'App\Http\Controllers\UserController@logout')->middleware('auth')->name('logout');
