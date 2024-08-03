<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::apiResource('articles', ArticleController::class);
// Route::get('/articles/{article}/comments', [ArticleController::class, 'getComments']);
// Route::post('/articles/{article}/comments', [ArticleController::class, 'createComment']);
// Route::delete('/articles/{article}/comments/{comment}', [ArticleController::class, 'delete']);
// Route::get('/articles/{article}/likes', [ArticleController::class, 'getLikes']);
// Route::post('/articles/{article}/likes', [ArticleController::class, 'createLike']);
// Route::delete('/articles/{article}/likes/{like}', [ArticleController::class, 'delete']);

