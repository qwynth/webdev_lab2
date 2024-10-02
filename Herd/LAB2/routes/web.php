<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\LogRequests;
use App\Http\Middleware\CheckAge;


// Group all routes with 'web' and 'LogRequest' middleware
Route::middleware(['web', LogRequests::class])->group(function () {

    // Route to store age in session
    Route::post('/store-age', function (Request $request) {
        $age = $request->input('age');
        session(['age' => $age]); // Store age in session
    });

    // Route to display the username input form
    Route::view('/', 'username');

    // Route to handle form submission via POST
    Route::post('/welcome', function (Request $request) {
        $name = $request->input('username') ?? 'Guest';  // Retrieve username
        session(['user_name' => $name]);  // Store username in session
        return redirect('/welcome');  // Redirect to welcome page
    });

    // Group routes requiring CheckAge middleware
    Route::middleware(CheckAge::class)->group(function () {

        // Route to handle GET requests to /welcome with CheckAge middleware
        Route::get('/welcome', function () {
            $name = session('user_name') ?? 'Guest';  // Retrieve name from session
            return view('welcome', compact('name'));  // Pass the name to the welcome view
        });

        // Route for access denied page
        Route::get('/access-denied', function () {
            return view('access-denied'); // When age is not valid
        });

        // New route with CheckAge middleware enforcing age of 21 and above
        Route::get('/restricted-area', function () {
            return view('restricted-area'); // Your view for the restricted area
        })->middleware(CheckAge::class.':21'); // Apply CheckAge with age parameter of 21// Apply CheckAge with age of 21 and above
    });

    // Other static pages
    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });
});
