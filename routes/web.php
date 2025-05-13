<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});

// Route::get('/artikel', function () {
//     return view('artikel', ['title' => 'Artikel']);
// });

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Kontak']);
});

// Route::get('/login', function () {
//     return view('login', ['title' => 'Login']);
// });

// Route::get('/register', function () {
//     return view('register', ['title' => 'Register']);
// });

Route::resource('articles', ArticleController::class);

//
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Lindungi route artikel
Route::middleware(['auth'])->group(function () {
    Route::resource('articles', ArticleController::class);
});

//

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');
    Route::delete('/profile', [AuthController::class, 'destroy'])->name('profile.destroy');
});


