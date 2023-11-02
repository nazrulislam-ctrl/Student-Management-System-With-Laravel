<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    public function index(Request $request)
    {
        $search= $request['search'] ?? "";
        if($search != ""){
            $course = Course::where('course_name', 'LIKE', "%$search%")->orwhere('course_code', 'LIKE', "%$search%")->get();
        }else{
            $course= Course::all();
        }
        // $course = Course::all();
        return view('courses.index',compact('course','search'));
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
