<?php

use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('posts', [PostApiController::class, 'index'])->name('posts.index');
Route::post('posts', [PostApiController::class, 'store'])->name('posts.store');
Route::put('posts/{post}', [PostApiController::class, 'edit'])->name('posts.edit');
Route::delete('posts/{post}', [PostApiController::class, 'destroy'])->name('posts.destroy');

Route::apiResource('teachers', TeacherController::class);

