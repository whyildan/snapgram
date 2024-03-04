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

Route::get('/', [\App\Http\Controllers\PageController::class, 'Home'])->name('home');
Route::get('/login', [\App\Http\Controllers\PageController::class, 'Login']);
Route::get('/daftar', [\App\Http\Controllers\PageController::class, 'Daftar']);
Route::get('/explore', [\App\Http\Controllers\PageController::class, 'Explore'])->name('explore');
Route::get('/p', [\App\Http\Controllers\PageController::class, 'Post']);
Route::get('/u/{username}', [\App\Http\Controllers\PageController::class, 'Profile'])->name('profile');
Route::get('/create', [\App\Http\Controllers\PageController::class, 'Create'])->name('create');
