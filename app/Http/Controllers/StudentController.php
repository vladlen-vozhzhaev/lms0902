<?php

namespace App\Http\Controllers;

use App\Models\BindStudentCourse;
use App\Models\Course;
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
    public function showDashboard(){
        $userId = auth()->user()->getAuthIdentifier();
        $bindCourses = BindStudentCourse::where('user_id', $userId)->get();
        $courses = [];
        foreach ($bindCourses as $bindCourse){
            $course = Course::where('id', $bindCourse->course_id)->first();
            $courses[] = $course;
        }
        return view('student.studentDashboard', ['courses'=>$courses, 'user'=>auth()->user()]);
    }
}
