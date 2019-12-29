<?php

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('dashboard/post', 'dashboard\PostController');
Route::resource('dashboard/category', 'dashboard\CategoryController');