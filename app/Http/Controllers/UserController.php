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
        return view('pages.changeUser', ['user'=>$user, 'roles'=>$roles]);
    }
    public function showUsers(){
        $users = \App\Models\User::all();
        foreach ($users as $user){
            $role = BindUserRole::where('user_id', $user->id)->first();
            $role = Role::where('id', $role->role_id)->first();
            $user->role = $role->name;
        }
        return view('pages.users', ['users'=>$users]);
    }
}
