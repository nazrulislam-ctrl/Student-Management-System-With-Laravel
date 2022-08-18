<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return view('courses.index',compact('course'));
    }
    public function store(Request $request )
    {
        $course = new Course;
        $course->department = $request->input('department');
        $course->course_name = $request->input('course_name');
        $course->course_code = $request->input('course_code');
        $course->save();
        return redirect()->back();

    }

}
