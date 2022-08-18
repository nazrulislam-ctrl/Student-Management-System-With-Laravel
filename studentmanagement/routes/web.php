<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\DpController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\courseController;
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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#Route::resource('/department','departmentController');
// Route::get('/department', [App\Http\Controllers\departmentController::class, 'index'])->name('home');
// Route::get('/student', [App\Http\Controllers\studentController::class, 'index'])->name('home');

Route::get('department', [DpController::class, 'index']);
Route::post('add-department', [DpController::class, 'store']);

Route::get('student', [studentController::class, 'index']);
Route::post('add-student', [studentController::class, 'store']);

Route::get('exam', [ExamController::class, 'index']);
Route::post('add-exam', [ExamController::class, 'store']);

Route::get('teachers', [TeacherController::class, 'index']);
Route::post('add-teacher', [TeacherController::class, 'store']);

Route::get('courses', [courseController::class, 'index']);
Route::post('add-course', [courseController::class, 'store']);

// Delete

Route::delete('delete-students/{id}',[studentController::class, 'destroy']);

Route::delete('delete-teachers/{id}',[TeacherController::class, 'destroy']);



