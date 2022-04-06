<?php

use App\Http\Controllers\admin\LessonController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\TeacherController;
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


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('teachers', [TeacherController::class, 'index'])->name('admin-teacher-list');
    Route::get('students', [StudentController::class, 'index'])->name('admin-student-list');
    Route::post('teacher-attach', [LessonController::class, 'teacher_attach'])->name('teacher-attach');
    Route::get('lesson-get', [LessonController::class, 'lesson_get'])->name('lesson-get');

});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
