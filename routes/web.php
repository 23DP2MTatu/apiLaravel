<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

Route::post('/',[PostController::class, 'store'])->name('post.store');
Route::get('/posts/',[PostController::class, 'show'])->name('post.show');

Route::get('/post/{post}/edit',[PostController::class, 'edit'])->name('post.edit'); 
Route::patch('/post/{post}',[PostController::class, 'update'])->name('post.update');

Route::delete('/post/{post}',[PostController::class, 'destroy'])->name('post.delete');