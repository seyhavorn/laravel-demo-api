<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('students-create', [StudentController::class, 'create'])->name('students-create');
Route::post('students', [StudentController::class, 'store'])->name('students.store');
Route::put('students/{student}', [StudentController::class, 'edit'])->name('students.eit');
Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
