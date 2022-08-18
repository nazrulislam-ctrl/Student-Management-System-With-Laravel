<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        $exam = Exam::all();
        return view('exam.index',compact('exam'));
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
