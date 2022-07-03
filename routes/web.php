<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, "getAllPosts"]);

Route::get('/post/delete/{id}', [PostController::class, "deletePostById"]);
Route::get('/post/id/{id}', [PostController::class, "getPostById"]);

Route::get('/post/create', [PostController::class, "getCreatePostPage"]);
Route::post('/post/create', [PostController::class, "createPost"]);