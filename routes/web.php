<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->middleware('guest');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('/register', [App\Http\Controllers\RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->middleware('guest');