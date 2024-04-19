<?php

namespace App\Http\Controllers;

use App\Models\BindTeacherCourse;
use App\Models\Course;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function getBindTeacherCourse(Request $request){
        $userId = $request->teacherId;
        $bindCourses = BindTeacherCourse::where('user_id', $userId)->get();
        $courses = Course::all();
        return json_encode(['bindCourses'=>$bindCourses, 'courses'=>$courses]);
    }
}
