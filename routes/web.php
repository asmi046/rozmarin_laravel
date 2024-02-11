<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [IndexController::class, "index"])->name('home');
Route::get('/about', [IndexController::class, "about"])->name('about');
Route::get('/service/{slug}', [ServiceController::class, "index"])->name('service_page');
Route::get('/our-works', [IndexController::class, "ourWorks"])->name('ourWorks');
