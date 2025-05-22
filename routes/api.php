<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/books', BookController::class);
Route::post('/books/{id}', [BookController::class, 'update']);

Route::apiResource('/genres', GenreController::class);
Route::post('/genres/{id}', [GenreController::class, 'update']);

Route::apiResource('/authors', AuthorController::class);
Route::post('/authors/{id}', [AuthorController::class, 'update']);