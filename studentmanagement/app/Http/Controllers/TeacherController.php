<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
         $teachers = Teacher::all();
        return view('teachers.index')->with('teachers',$teachers);
    }

    public function store(Request $request)
    {
        $teachers = new Teacher;
        $teachers-> id= $request->input('id');
        $teachers-> name= $request->input('name');
        $teachers-> department= $request->input('department');
        $teachers-> phone= $request->input('phone');
        $teachers-> email= $request->input('email');
        $teachers-> save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $teachers=Teacher::find($id);
        $teachers->delete();
        return redirect()->back();
    }
}
