<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('media', \App\Http\Controllers\MediaController::class);
Route::apiResource('service', \App\Http\Controllers\ServiceController::class);
Route::apiResource('team', \App\Http\Controllers\TeamsController::class);
Route::apiResource('news', \App\Http\Controllers\NewsController::class);
Route::apiResource('comment', \App\Http\Controllers\CommentController::class);
Route::apiResource('project', \App\Http\Controllers\ProjectController::class);
