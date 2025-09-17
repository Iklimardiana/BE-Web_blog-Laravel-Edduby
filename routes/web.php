<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/create', function () {
    return view('posts.create');
})->name('posts.create');

Route::get('/post', function () {
    return view('posts.index');
})->name('posts.index');
