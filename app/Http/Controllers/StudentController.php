<?php

namespace App\Http\Controllers;

use App\Models\StudentGroup;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showAddStudentGroup(){
        return view('pages.addStudentGroup');
    }

    public function addStudentGroup(Request $request){
        $groupName = $request->name;
        $studentGroup = new StudentGroup();
        $studentGroup->name = $groupName;
        $studentGroup->save();
        return redirect()->intended('/addStudentGroup');
    }
}
