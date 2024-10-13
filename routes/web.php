<?php

use Illuminate\Support\Facades\Route;

// Route for Landing Page
Route::get('/', function () {
    return view('LandingPage');
});

// Route to handle the form submission
Route::post('/Welcome', function () {
    // Get the name from the request or default to 'Guest'
    $name = request()->input('name', 'Guest');

    // Validate name to ensure it only contains alphabetic characters
    if (!preg_match('/^[A-Za-z]+$/', $name)) {
        $name = 'Guest';
    }

    // Store the name in session
    session(['name' => $name]);

    // Redirect to Welcome page
    return redirect('/Welcome');
});

// GET Route for Welcome page (after form submission)
Route::get('/Welcome', function () {
    // Retrieve the name from the session
    $name = session('name', 'Guest');
    
    return view('Welcome', ['name' => $name]);
});

// Other routes
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

// Route to handle "Continue as Guest" link
Route::get('/Guest', function () {
    // Store 'Guest' in session
    session(['name' => 'Guest']);

    // Redirect to Welcome page
    return redirect('/Welcome');
});


// Route to handle when access is denied
Route::get('/Access-denied', function () {
    // Get the username from the session
    $username = Session::get('name', 'Guest');

    // Clear the username and age from the session
    Session::forget('name');

    return view('Access-denied'); 
});