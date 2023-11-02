<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\studentModel;
class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search= $request['search'] ?? "";
        if($search != ""){
            $students = studentModel::where('id', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->orwhere('phone', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
        }else{
            $students = studentModel::all();
        }
        
        return view('student.index',compact('students','search'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = new studentModel;
        $students-> id= $request->input('id');
        $students-> name= $request->input('name');
        $students-> department= $request->input('department');
        $students-> phone= $request->input('phone');
        $students-> email= $request->input('email');
        $students-> save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students=studentModel::find($id);
        $students->delete();
        return redirect()->back();
    }
}
