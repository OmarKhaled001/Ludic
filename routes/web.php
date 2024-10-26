<?php

use App\Http\Controllers\PageController;
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


Route::get('/',               [PageController::class,'index'])        ->name('index');
Route::get('/about',          [PageController::class,'about'])        ->name('about');
Route::get('/service/{slug}', [PageController::class,'service'])      ->name('service');
Route::get('/contact',        [PageController::class,'contact'])      ->name('contact');
Route::post('/contact',       [PageController::class,'contactForm'])  ->name('contact');

