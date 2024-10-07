<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;

// Unrestricted Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

// Welcome route for age submission
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Restricted area route (21+)
Route::get('/restricted-area', function () {
    return view('restricted-area');
})->name('restricted.area');

// Access Denied route for underage users
Route::get('/access-denied', function () {
    return view('access-denied');
})->name('access.denied');

// Route to handle age submission and redirect based on age
Route::post('/store-age', function (Request $request) {
    $request->validate([
        'age' => 'required|integer|min:1|max:120',
    ]);

    // Store the user's age in session
    session(['age' => $request->input('age')]);
    $age = $request->input('age');

    // Redirect based on age
    if ($age < 18) {
        return redirect()->route('access.denied');
    } elseif ($age >= 21) {
        return redirect()->route('restricted.area');
    } else {
        return redirect()->route('chapters');
    }
})->name('store.age');

// Protected Routes Group - Only accessible if CheckAge allows
Route::middleware([CheckAge::class])->group(function () {
    Route::get('/chapters', function () {
        return view('chapters');
    })->name('chapters');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});
