<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::resource("students", StudentController::class);
Route::resource("teachers", TeacherController::class);
Route::resource("courses", CourseController::class);

Route::patch("/teachers/{teacher}/course/assign", [TeacherController::class, 'assignCourse']);
Route::patch("/teachers/{teacher}/course/remove/{course}", [TeacherController::class, 'removeCourse']);

Route::patch("/courses/{course}/teacher/assign", [CourseController::class, 'assignTeacher']);
Route::patch("/courses/{course}/teacher/remove/{teacher}", [CourseController::class, 'removeTeacher']);
