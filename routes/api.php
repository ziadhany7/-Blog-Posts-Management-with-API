<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//  CRUD Route
Route::apiResource('posts',PostController::class);

//  Auth User Route
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth:sanctum');

Route::prefix('admin')->group(function(){
    
    Route::post('/login', [AdminController::class,'login']);
    Route::post('/register', [AdminController::class,'register']);
    Route::post('/logout', [AdminController::class,'logout'])->middleware('auth:sanctum');
    Route::delete('/{user}', [AdminController::class,'delete_admin'])->middleware('auth:sanctum');


    Route::get('/count', [AdminController::class,'get_num_of_admins'])->middleware('auth:sanctum');

    Route::get('/users', [AdminController::class,'get_users'])->middleware('auth:sanctum');
    Route::get('/users/count', [AdminController::class,'get_num_of_users'])->middleware('auth:sanctum');
    Route::get('/users/{user}', [AdminController::class,'get_single_user'])->middleware('auth:sanctum');
    Route::delete('/users/{user}', [AdminController::class,'delete_user'])->middleware('auth:sanctum');


    Route::get('/posts', [AdminController::class,'get_posts'])->middleware('auth:sanctum');
    Route::get('/posts/count', [AdminController::class,'get_num_of_posts'])->middleware('auth:sanctum');
    Route::get('/posts/{post}', [AdminController::class,'get_single_post'])->middleware('auth:sanctum');
    Route::delete('/posts/{post}', [AdminController::class,'delete_single_post'])->middleware('auth:sanctum');
}
);

