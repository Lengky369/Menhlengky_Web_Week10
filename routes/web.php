<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\pageController::class, 'index']);
Route::get('/view/{id}', [App\Http\Controllers\pageController::class, 'show']);
Route::get('/create_post', [App\Http\Controllers\pageController::class, 'create_post']);
Route::get('/register', [App\Http\Controllers\pageController::class, 'register']);
Route::get('/login', [App\Http\Controllers\pageController::class, 'login']);
