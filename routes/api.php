<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/books', function (Request $request) {
    return $request->books();
})->middleware('auth:sanctum');

Route::get('/users', function (Request $request) {
    return $request->users();
})->middleware('auth:sanctum');

Route::get('/books',[BookController::class, 'index']);
Route::get('/books/{id}',[BookController::class, 'show']);
Route::post('/books',[BookController::class, 'store']);
Route::put('/books/{id}',[BookController::class, 'update']);
Route::delete('/books/{id}',[BookController::class, 'destroy']);

Route::get('/users',[UserController::class, 'index']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::post('/users',[UserController::class, 'store']);
Route::put('/users/{id}',[UserController::class, 'update']);
Route::delete('/users/{id}',[UserController::class, 'destroy']);