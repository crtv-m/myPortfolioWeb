<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.homepage.homepage');
});

Route::get('/projects', function () {
    return view('frontend.footer.footer');
});
