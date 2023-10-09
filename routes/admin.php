<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\LogoutAdminController;
use App\Http\Controllers\Admin\AuthController;


Route::middleware("guest:admin")->group(function(){
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
});


Route::middleware("auth:admin")->group(function(){
    
    Route::post('/logout', [PostController::class, 'logout'])->name('logout');
    Route::get('/post', [PostController::class, 'index'])->name('post');
});

