<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Education', function () {
    return view('Education');
});

Route::get('/Projects', function () {
    return view('Projects');
});
