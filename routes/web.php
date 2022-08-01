<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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
Route::get('/', [UserController::class, 'index'])->name('/');
Route::get('/home',[UserController::class, 'home'])->name('home');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/bitm', [UserController::class, 'bitm'])->name('bitm');
Route::post('/fullName', [StudentController::class, 'fullName'])->name('fullName');
