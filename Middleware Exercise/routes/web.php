
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/chapters', function () {
    return view('chapters');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user', function () {
    $username = request()->input('username', 'Guest');

    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }
    return view('user', ['username' => $username]);
});

Route::post('/CheckAge', [UserController::class, 'CheckAge'])->name('CheckAge');

Route::get('/access-denied', function () {
    return view('access-denied');
});



Route::get('/restricted', function () {
    return view('restricted');
});
