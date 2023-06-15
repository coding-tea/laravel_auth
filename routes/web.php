<?php

use App\Http\Controllers\announceController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerController;
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
Route::get('/', function(){
    return view('layout');
})->name('home');

Route::get('/login', [loginController::class, 'show'])->name('login');
Route::post('/login', [loginController::class, 'login'])->name('action.login');

Route::get('/register', [registerController::class, 'show'])->name('register');
Route::post('/register', [registerController::class, 'register'])->name('action.register');

Route::post('/logout', [logoutController::class, 'logout'])->name('logout')->middleware('auth');

Route::resource('/announces', announceController::class)->middleware('auth');
