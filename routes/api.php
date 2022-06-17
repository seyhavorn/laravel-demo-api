<?php

use App\Http\Controllers\Api\PostApiController;
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

//POST API:
Route::get('posts', [PostApiController::class, 'index'])->name('posts-api.index');
Route::post('posts', [PostApiController::class, 'store'])->name('posts-api.store');
Route::put('posts/{post}', [PostApiController::class, 'edit'])->name('posts-api.edit');
Route::delete('posts/{post}', [PostApiController::class, 'destroy'])->name('posts-api.destroy');

//Teacher API:
Route::get('teachers', [TeacherApiController::class, 'index'])->name('teachers-api.index');
Route::post('teachers', [TeacherApiController::class, 'store'])->name('teachers-api.store');
Route::put('teachers/{teacher}', [TeacherApiController::class, 'update'])->name('teachers-api.update');

//Student API:
Route::get('students', [StudentApiController::class, 'index'])->name('students-api.index');
Route::post('students', [StudentApiController::class, 'store'])->name('students-api.store');
Route::put('students/{student}', [StudentApiController::class, 'update'])->name('student-api.update');
Route::delete('students/{student}', [StudentApiController::class, 'destroy'])->name('student-api.destroy');

