<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavegationController;

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

Route::get('/', [NavegationController::class, 'home'])->name('home');

Route::get('/home', [NavegationController::class, 'home'])->name('home');
Route::get('/petmart', [NavegationController::class, 'petmart'])->name('petmart');
Route::get('/about', [NavegationController::class, 'about'])->name('about');
Route::get('/blog', [NavegationController::class, 'blog'])->name('blog');
Route::get('/petguide', [NavegationController::class, 'petguide'])->name('petguide');
Route::get('/contact', [NavegationController::class, 'contact'])->name('contact');