<?php

use App\Http\Controllers\Api\AuthController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Protected Route:
Route::group([
    'prefix'     => 'v1',
//    'middleware' => 'auth:sanctum'
], function () {
    Route::apiResource('posts', PostApiController::class);
    Route::apiResource('teachers', TeacherApiController::class);
    Route::apiResource('students', StudentApiController::class);
    Route::apiResource('products', ProductApiController::class);
    Route::get('products/search/{name}', [ProductApiController::class, 'search']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

