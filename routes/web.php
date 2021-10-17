<?php

use Illuminate\Support\Facades\Route;

/* Pages */
Route::get('/', 'App\Http\Controllers\PageController@home')->name('home');
Route::get('/home', 'App\Http\Controllers\PageController@home');
Route::get('/watch', 'App\Http\Controllers\PageController@watch')->name('watch');
Route::get('/user', 'App\Http\Controllers\PageController@user')->middleware('auth')->name('user');
Route::get('/my-videos', 'App\Http\Controllers\PageController@videos')->middleware('auth')->name('videos');
Route::get('/history', 'App\Http\Controllers\PageController@history')->middleware('auth')->name('history');
Route::get('/likes', 'App\Http\Controllers\PageController@likes')->middleware('auth')->name('likes');
Route::get('/upload', 'App\Http\Controllers\PageController@upload')->middleware('auth')->name('upload');
Route::get('/subscribes', 'App\Http\Controllers\PageController@subscribes')->middleware('auth')->name('subscribes');
Route::get('/settings', 'App\Http\Controllers\PageController@settings')->middleware('auth')->name('settings');
Route::get('/sign-up', 'App\Http\Controllers\PageController@sign_up')->middleware('guest')->name('sign-up-form');
Route::get('/sign-in', 'App\Http\Controllers\PageController@sign_in')->middleware('guest')->name('sign-in-form');

/* Video & comments */
Route::post('/video/search', 'App\Http\Controllers\VideoController@search');
Route::post('/video/upload', 'App\Http\Controllers\VideoController@upload')->middleware('auth')->name('upload-video');
Route::get('/video/like', 'App\Http\Controllers\VideoController@like')->middleware('auth');
Route::get('/video/dislike', 'App\Http\Controllers\VideoController@dislike')->middleware('auth');
Route::get('/comment/like', 'App\Http\Controllers\CommentController@like')->middleware('auth');
Route::get('/comment/dislike', 'App\Http\Controllers\CommentController@dislike')->middleware('auth');
Route::post('/comment/upload', 'App\Http\Controllers\CommentController@upload')->middleware('auth');
Route::post('/user/subscribe', 'App\Http\Controllers\UserController@subscribe')->middleware('auth');

/* Auth */
Route::post('/sign-up', 'App\Http\Controllers\UserController@sign_up')->middleware('guest')->name('sign-up');
Route::post('/sign-in', 'App\Http\Controllers\UserController@sign_in')->middleware('guest')->name('sign-in');
Route::any('/logout', 'App\Http\Controllers\UserController@logout')->middleware('auth')->name('logout');

/* Settings */
Route::post('/settings/update/header', 'App\Http\Controllers\UserController@updateHeader')->middleware('auth');
Route::post('/settings/update/avatar', 'App\Http\Controllers\UserController@updateAvatar')->middleware('auth');

