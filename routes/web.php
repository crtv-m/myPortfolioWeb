<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.homepage.homepage');
});

Route::get('/projects', function () {
    return view('frontend.projects');
});

Route::get('/posts', ['App\\Http\\Controllers\\PostController', 'show']);
