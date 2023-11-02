<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dp;

class DpController extends Controller
{
    public function index(Request $request)
    {
        $search= $request['search'] ?? "";
        if($search != ""){
            $dpt = dp::where('department_initial', 'LIKE', "%$search%")->orwhere('department_name', 'LIKE', "%$search%")->get();
        }else{
            $dpt = dp::all();
        }
       
        return view('dp.index',compact('dpt','search'));
        
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
