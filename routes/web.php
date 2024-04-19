<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
 * 1) Реализовать личный кабинет преподавателя
 * 2) Реализовать личным кабинет студента
 * */
Route::view('/', 'welcome');
Route::view('/addRole', 'pages.addRole')->middleware('admin');
Route::post('/addRole', [UserController::class, 'addRole'])->middleware('admin');
Route::get('/users', [UserController::class, 'showUsers'])->middleware('admin');
Route::get('/changeUser/{id}', [UserController::class, 'showUserChangeRole'])->middleware('admin');
Route::post('/changeUserRole', [UserController::class, 'changeUserRole'])->middleware('admin');
Route::get('/dashboard', [UserController::class, 'showDashboard'])->middleware(['auth'])->name('dashboard');
Route::view('/admin-dashboard', 'admin.adminDashboard')->middleware('admin');
Route::get('/students', [UserController::class, 'showStudents'])->middleware('admin');
Route::get('/getBindStudentCourse/{studentId}', [UserController::class, 'getBindStudentCourse'])->middleware('admin');
Route::get('/deleteStudent/{userId}', [UserController::class, 'deleteStudent'])->middleware('admin');
Route::get('/addCourse', [\App\Http\Controllers\CourseController::class, 'showAddCourse'])->middleware('admin');
Route::post('/addCourse', [\App\Http\Controllers\CourseController::class, 'addCourse'])->middleware('admin');
Route::get('/courses', [\App\Http\Controllers\CourseController::class, 'showAllCourses'])->middleware('admin');
Route::get('/courseEdit/{id}', [\App\Http\Controllers\CourseController::class, 'showEditCourse'])->middleware('admin');
Route::get('/addTeacherCourse/{userId}/{courseId}', [\App\Http\Controllers\CourseController::class, 'addTeacherCourse'])->middleware('admin');
Route::get('/addStudentCourse/{userId}/{courseId}', [UserController::class, 'addStudentCourse'])->middleware('admin');
Route::get('/teachers', [UserController::class, 'showTeachers'])->middleware('admin');
Route::get('/getBindTeacherCourse/{teacherId}', [TeacherController::class, 'getBindTeacherCourse'])->middleware('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
