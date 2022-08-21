<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index(Request $request)
    {
        $search= $request['search'] ?? "";
        if($search != ""){
            $exam = Exam::where('exam_title', 'LIKE', "%$search%")->orwhere('exam_type', 'LIKE', "%$search%")->orwhere('exam_date', 'LIKE', "%$search%")->get();
        }else{
            $exam = Exam::all();
        }
        return view('exam.index',compact('exam','search'));
    }
    public function store(Request $request )
    {
        $exam = new Exam;
        $exam->exam_title = $request->input('exam_title');
        $exam->exam_type = $request->input('exam_type');
        $exam->marks = $request->input('marks');
        $exam->duration = $request->input('duration');
        $exam->exam_date = $request->input('exam_date');
        $exam->save();
        return redirect()->back();

    }

    public function edit($exam_title)
    {
        $exam= Exam::find($exam_title);
        return view('exam.edit', compact('exam'));
    }


}
