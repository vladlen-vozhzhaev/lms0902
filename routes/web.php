<?php

use App\Http\Controllers\ProfileController;
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
    return view('pages.addRole');
});
Route::post('/addRole', function (\Illuminate\Http\Request $request){
    $role = new \App\Models\Role();
    $role->name = $request->name;
    $role->save();
    return "Роль успешно добавлена";
});
Route::get('/users', function (){
    $users = \App\Models\User::all();
    return view('pages.users', ['users'=>$users]);
});
Route::get('/changeUser/{id}', function (\Illuminate\Http\Request $request){
    $user = \App\Models\User::where('id', $request->id)->first();
    $roles = \App\Models\Role::all();
    return view('pages.changeUser', ['user'=>$user, 'roles'=>$roles]);
});
Route::post('/changeUserRole', function (\Illuminate\Http\Request $request){
   $bindUserRole = new \App\Models\BindUserRole();
   $bindUserRole->user_id = $request->user_id;
   $bindUserRole->role_id = $request->role_id;
   $bindUserRole->save();
   return 'Роль успешно добавлена';
});
Route::get('/dashboard', function () {
    $bindUserRole = \App\Models\BindUserRole::where('user_id', auth()->user()->getAuthIdentifier())->first();
    if($bindUserRole->role_id == 1)
        return redirect()->intended('/admin-dashboard');
    else if($bindUserRole->role_id == 2)
        return redirect()->intended('/teacher-dashboard');
    else if($bindUserRole->role_id == 3)
        return redirect()->intended('/student-dashboard');
    else
        return redirect()->intended('/guest-dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/admin-dashboard', function (){
   return view('admin.adminDashboard');
})->middleware('auth');
Route::get('/students', function (){
   $users = \App\Models\User::all();
   $students = new \Illuminate\Support\Collection();
   foreach ($users as $user){
       $userId = $user->id;
       $bindUserRole = \App\Models\BindUserRole::where('user_id', $userId)->first();
       if($bindUserRole->role_id == 3)
           $students->add($user);
   }
   return view('admin.students', ['students'=>$students]);
})->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
