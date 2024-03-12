<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   

        $student = Student::all();
        return view('students.index', ['students'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:10|max:50|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'course' => 'required|min:6|max:200|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'email'=>'required|email',
            'phone'=>'required|numeric|min:10'
           

        ]);

        
            $student = Student::create([
                'name' => $request->input('name'),
                'course' => $request->input('course'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone')             
                        
            ]); 
        
       
        return redirect()->route('students.index')->with('success', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        $student = Student::find($student->id); 
        //$student = Student::where('id', $student->id)->first();
        return view('students.show', ['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
       
        return view('students.edit', ['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idH
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //save data

        $studentUpdate = Student::where('id', $student->id)->update([
            'name'=>$request ->input('name'),
            'course'=>$request ->input('course'),
            'email'=>$request ->input('email'),
            'phone'=>$request ->input('phone'),        
        ]);
                
        if($studentUpdate){
            return redirect()->route('students.index', ['student'=>$student->id])->with('success', 'Student Updated Successfully');
        }
        //redirect
        return back()->withInput();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        $findStudent = Student::find($student->id);
        if($findStudent->delete()){

            //redirect
            return redirect()->route('students.index')->with('success', 'Student deleted successfully' );
        }
        return back()->withInput()->with('error', 'Student could not be deleted');
    
    }
}
