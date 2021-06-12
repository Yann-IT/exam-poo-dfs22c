<?php

use Controllers\{PostController, CommentController};
use Facades\Route;
Route::get('/comments/modify/{id}', [CommentController::class, 'modify']);
Route::post('/comments/modify/{id}', [CommentController::class, 'processModify']);
Route::get('/comments/delete/{id}', [CommentController::class, 'delete']);

Route::get('/posts/modify/{id}', [PostController::class, 'modify']);
Route::post('/posts/modify/{id}', [PostController::class, 'processModify']);
Route::get('/posts/delete/{id}', [PostController::class, 'delete']);

Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/create', [PostController::class, 'processCreate']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::post('/posts/{id}', [CommentController::class, 'create']);


Route::get('/', [PostController::class, 'index']);





