<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dp;

class DpController extends Controller
{
    public function index()
    {
        $dpt = dp::all();
        return view('dp.index',compact('dpt'));
        // ->with('dpt',$dpt);
    }

    public function store(Request $request)
    {
        $dpt = new dp;
        $dpt-> department_initial= $request->input('department_initial');
        $dpt-> department_name= $request->input('department_name');
        $dpt-> no_of_students= $request->input('no_of_students');
        $dpt-> no_of_faculties= $request->input('no_of_faculties');
        $dpt-> save();
        return redirect()->back();
    }


}
