<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')
    ->controller(AuthController::class)
    ->group(
        function () {
            Route::get('login', function () {
                return view('auth.login');
            })->name('log-in');
            Route::get('register', function () {
                return view('auth.sign-up');
            })->name('sign-up');
            Route::get('/social/{provider}/callback', 'socialAuthCallback')->name('auth.social.callback');
            Route::get("/social/{provider}", "redirect");
        }
    );

Route::get('/home', function () {
    return "This is the home route";
})->name('home');

Route::get('/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});



