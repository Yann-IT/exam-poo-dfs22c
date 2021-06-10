<?php

use Controllers\{AnimalController, PostController};
use Facades\Route;

// Route::get('/animals', [AnimalController::class, 'index']);
// Route::get('/animals/{id}', [AnimalController::class, 'show']);
// Route::post('/animals/create', [AnimalController::class, 'create']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/create', [PostController::class, 'processCreate']);


Route::get('/posts/modify/{id}', [PostController::class, 'modify']);
