<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\LikeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('users', UserController::class);
Route::get("users/job/{job}", [UserController::class, "getByName"]);

Route::apiResource('posts', PostController::class);
Route::get("posts/continent/{continent}", [PostController::class, "getByContinent"]);

Route::apiResource('comments', CommentController::class);

Route::apiResource('likes', LikeController::class);
Route::get("likes/like/{like}", [LikeController::class, "getByLike"]);
