<?php

namespace App\Http\Controllers;

use App\Models\BindTeacherCourse;
use App\Models\BindUserRole;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CourseController extends Controller
{
    public function showAddCourse(){
        return view('admin.addCourse');
    }

    public function addCourse(Request $request){
        $name = $request->name;
        $course = new Course();
        $course->name = $name;
        $course->save();
        return redirect()->intended('/courses');
    }

    public function showAllCourses(Request $request){
        $courses = Course::all();
        return view('admin.courses', ['courses'=>$courses]);
    }
    public function showEditCourse(Request $request){
        $course = Course::where('id', $request->id)->first();
        $BindUserRoles = BindUserRole::where('role_id', 2)->get();
        $teachers = new Collection();
        foreach ($BindUserRoles as $BindUserRole){
            $teacher = User::where('id', $BindUserRole->user_id)->first();
            $bindTeacherCourse = BindTeacherCourse::where(['user_id'=>$BindUserRole->user_id, 'course_id'=>$request->id])->first();
            if(!empty($bindTeacherCourse)) $teacher->appointed = true;
            else $teacher->appointed = false;
            $teachers->add($teacher);
        }
        return view('admin.editCourse', ['course'=>$course, 'teachers'=>$teachers]);
    }

    public function addTeacherCourse(Request $request){
        $userId = $request->userId;
        $courseId = $request->courseId;
        $bindTeacherCourse = new BindTeacherCourse();
        $bindTeacherCourse->user_id = $userId;
        $bindTeacherCourse->course_id = $courseId;
        $bindTeacherCourse->save();
        return redirect()->intended('/courseEdit/'.$courseId);
    }
}
