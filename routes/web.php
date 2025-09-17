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

// login
Route::get('/login', function () {
    return view('auth.login'); // bikin file resources/views/auth/login.blade.php
})->name('login');
// login
Route::get('/register', function () {
    return view('auth.register'); // bikin file resources/views/auth/login.blade.php
})->name('register');
