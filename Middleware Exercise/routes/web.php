<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


Route::middleware(['log.requests'])->group(function () {
Route::get('/', function () {
    return view('home');
});

// Welcome route
Route::get('/welcome', function () {
    return view('welcome');
});

// Chapters route
Route::get('/chapters', function () {
    return view('chapters');
});

// Contact route
Route::get('/contact', function () {
    return view('contact');
});

// User route
Route::get('/user', function () {
    $username = request()->input('username', 'Guest');

    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    return view('user', ['username' => $username]);
});

// Storing username and age in the session (example route)
Route::post('/store-user', function (Request $request) {
    $request->validate([
        'username' => 'required|string',
        'age' => 'required|integer|min:1|max:120',
    ]);

    // Store data in the session
    Session::put('username', $request->input('username'));
    Session::put('age', $request->input('age'));

    return redirect('/restricted'); // Redirect to a route that uses CheckAge middleware
});

// Route for access denied page
Route::get('/access-denied', function () {
    return view('access-denied');
});

// Restricted page protected by CheckAge middleware
Route::get('/restricted', function () {
    return view('restricted');
})->middleware('checkAge');

});