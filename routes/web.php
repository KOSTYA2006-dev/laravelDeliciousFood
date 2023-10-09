<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LogoutController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'Store']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);


Route::middleware("web")->group(function(){
    
    Route::get('/home{id}', [MainController::class, 'index'])->name('home');
    Route::get('/home{id}/search', [MainController::class, 'search'])->name('search');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::post('/profil/avatar{id}', [ProfilController::class, 'avatar'])->name('profil.profiles');
});
