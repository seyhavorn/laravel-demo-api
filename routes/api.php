<?php

use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\StudentApiController;
use App\Http\Controllers\Api\TeacherApiController;
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

Route::resource('posts', PostApiController::class);
Route::resource('teachers', TeacherApiController::class);
Route::resource('students', StudentApiController::class);
Route::resource('products', ProductApiController::class);


