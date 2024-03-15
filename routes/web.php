<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addRole', function (){
    $roles = \App\Models\Role::all();
    return view('pages.addRole', ['roles'=>$roles]);
});
Route::post('/addRole', [UserController::class, 'addRole']);
Route::get('/users', [UserController::class, 'showUsers']);
Route::get('/changeUser/{id}', [UserController::class, 'showUserChangeRole']);
Route::post('/changeUserRole', function (\Illuminate\Http\Request $request){
   $bindUserRole = new \App\Models\BindUserRole();
   $bindUserRole->user_id = $request->user_id;
   $bindUserRole->role_id = $request->role_id;
   $bindUserRole->save();
   return 'Роль успешно добавлена';
});

Route::get('/addStudentGroup', [StudentController::class, 'showAddStudentGroup']);
Route::post('/addStudentGroup', [StudentController::class, 'addStudentGroup']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
