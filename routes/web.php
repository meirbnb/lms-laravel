<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.login'); // temporary - delete after homepage is made
Route::get('/login', [HomeController::class, 'index'])->name('home.login');
Route::get('/signup', [HomeController::class, 'signup'])->name('home.signup');
Route::get('/restore', [HomeController::class, 'restore'])->name('home.restore');
Route::get('/confirm', [HomeController::class, 'confirm'])->name('home.confirm');