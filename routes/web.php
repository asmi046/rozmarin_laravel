<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
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
Route::get('/all-projects', [ProjectController::class, "index"])->name('projects');
Route::get('/all-projects/{slug}', [ProjectController::class, "project_page"])->name('project_page');
