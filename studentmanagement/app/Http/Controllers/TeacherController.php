<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $search= $request['search'] ?? "";
        if($search != ""){
            $teachers = Teacher::where('id', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->orwhere('phone', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
        }else{
            $teachers = Teacher::all();
        } 
        return view('teachers.index',compact('teachers','search'));
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
