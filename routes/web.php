<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'App\Http\Controllers\PostController@index');
Route::get('/posts/message', 'App\Http\Controllers\PostController@message')->name('posts.message');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');
