<?php

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('dashboard/post', 'dashboard\PostController');