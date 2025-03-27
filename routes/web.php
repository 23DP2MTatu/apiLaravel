<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::middleware('auth:sanctum')-> get('/post/create', [PostController::class, 'create'])->name('post.create');

Route::post('/',[PostController::class, 'store'])->name('post.store');
Route::get('/posts/',[PostController::class, 'show'])->name('post.show');

Route::middleware('auth:sanctum')->get('/post/{post}/edit',[PostController::class, 'edit'])->name('post.edit'); 
Route::middleware('auth:sanctum')->patch('/post/{post}',[PostController::class, 'update'])->name('post.update');

Route::middleware('auth:sanctum')->delete('/post/{post}',[PostController::class, 'destroy'])->name('post.delete');

Route::get('/login', [AuthController::class, 'loginView'])->name('auth.login.show');
Route::get('/register', [AuthController::class, 'registerView'])->name('auth.register.show');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/logout',[AuthController::class, 'logout'])->name('post.logout');