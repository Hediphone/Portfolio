<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\CheckAge; // Import CheckAge middleware
use App\Http\Middleware\LogRequests; // Import LogRequests middleware

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

// Parameterized route to render lab views based on the lab name
Route::get('/Projects/{Lab}', function ($Lab) {
    return view($Lab);  
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Verify', function () {
    return view('Verify');
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
    // Clear the age and verification_stat from the session
    Session::forget('age');
    Session::forget('verification_stat');
    
    return view('Access-denied'); 
});

// Route to handle the form submission of age
Route::post('/verify-age', function () {
    // Get the 'age' from the request input
    $age = request()->input('age');

    // Store the age in session
    Session::put('age', $age);

    return redirect('/Projects');
});

// Apply CheckAge with a minimum age of 21 for Projects
Route::middleware([CheckAge::class . ':21', LogRequests::class])->group(function () {
    Route::get('/Projects', function () {
        
        $name = Session::get('name', 'Guest');
        $age = Session::get('age');
        $verification_stat = Session::get('verification_stat');
    
        return view('Projects', ['name' => $name, 'age' => $age, 'verification_stat' => $verification_stat]);
    });
});