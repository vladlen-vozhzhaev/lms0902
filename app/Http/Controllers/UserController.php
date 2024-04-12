<?php

namespace App\Http\Controllers;

use App\Models\BindUserRole;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addRole(Request $request){
        $role = new \App\Models\Role();
        $role->name = $request->name;
        $role->save();
        return redirect()->intended('/addRole');
    }
    /* Метод для отображения страницы редактирования пользовательской роли */
    public function showUserChangeRole(Request $request){
        $user = \App\Models\User::where('id', $request->id)->first();
        $roles = \App\Models\Role::all();
        return view('admin.changeUser', ['user'=>$user, 'roles'=>$roles]);
    }
    public function showUsers(){
        $users = \App\Models\User::all();
        foreach ($users as $user){
            $role = BindUserRole::where('user_id', $user->id)->first();
            $role = Role::where('id', $role->role_id)->first();
            $user->role = $role->name;
        }
        return view('admin.users', ['users'=>$users]);
    }
    public function changeUserRole(Request $request){
        $bindUserRole = BindUserRole::where('user_id', $request->user_id)->first();
        $bindUserRole->role_id = $request->role_id;
        $bindUserRole->save();
        return redirect()->intended('/users');
    }
    public function showDashboard(){
        $bindUserRole = \App\Models\BindUserRole::where('user_id', auth()->user()->getAuthIdentifier())->first();
        if($bindUserRole->role_id == 1)
            return redirect()->intended('/admin-dashboard');
        else if($bindUserRole->role_id == 2)
            return redirect()->intended('/teacher-dashboard');
        else if($bindUserRole->role_id == 3)
            return redirect()->intended('/student-dashboard');
        else
            return redirect()->intended('/guest-dashboard');
    }
    public function showStudents(){
        $users = \App\Models\User::all();
        $students = new \Illuminate\Support\Collection();
        foreach ($users as $user){
            $userId = $user->id;
            $bindUserRole = \App\Models\BindUserRole::where('user_id', $userId)->first();
            if($bindUserRole->role_id == 3)
                $students->add($user);
        }
        return view('admin.students', ['students'=>$students]);
    }
}
