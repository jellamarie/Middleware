
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

Route::post('/CheckAge', [UserController::class, 'CheckAge'])->name('CheckAge');

Route::get('/access-denied', function () {
    return view('access-denied');
});



Route::get('/restricted', function () {
    return view('restricted');
})->middleware('checkAge');

