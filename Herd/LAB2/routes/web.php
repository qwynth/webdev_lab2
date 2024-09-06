<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Group routes with 'web' middleware
Route::middleware(['web'])->group(function () {
    // Route to display the username input form
    Route::view('/', 'username');

   // Route to handle form submission via POST
Route::post('/welcome', function (Request $request) {
    // Retrieve the 'username' input from the form; default to 'Guest' if not provided
    $name = $request->input('username') ?? 'Guest';

    // Store the name in the session
    session(['user_name' => $name]);

    // Redirect to the welcome page
    return redirect('/welcome');
});

// Route to handle GET requests to /welcome
Route::get('/welcome', function () {
    $name = session('user_name') ?? 'Guest';  // Retrieve name from session or default to 'Guest'
    return view('welcome', compact('name'));  // Pass the name to the welcome view
});
});

// Other static pages
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});