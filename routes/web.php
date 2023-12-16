<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home']);
Route::get('/home', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/education', [PublicController::class, 'education'])->name('education');
Route::get('/skill', [PublicController::class, 'skill'])->name('skill');
Route::get('/achievement', [PublicController::class, 'achievement'])->name('achievement');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
