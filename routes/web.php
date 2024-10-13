<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Projects', function () {
    return view('Projects');
});

Route::get('/Contact', function () {
    return view('Contact');
});

