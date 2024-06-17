<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);


// Route::get('/login', function () {
//     return view('user/login');
// })->name('login');

// Route::get('/register', function () {
//     return view('user/register');
// })->name('register');
// Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Route::post('/register', [UserController::class, 'register'])->name('register');
 Route::post('/login', [UserController::class, 'login'])->name('login');