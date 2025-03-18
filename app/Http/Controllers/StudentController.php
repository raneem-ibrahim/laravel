<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = student::with('profile')->get();
       return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('student.creat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $students= new student();
       $students->name =$request->name;
       $students->number =$request->number;
       $students->email =$request->email;
       $students->save();
       return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students=student:: findorFail($id);
        return view('student.edit' , compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
          
            $students = student::findOrFail($id); 
            $students->update([
                'name' => $request->name,
                'number' => $request->number,
                'email' => $request->email
            ]);
            return redirect()->route('students.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // student::findorFail($id)->delete();
        // return redirect()->route('students.index');

        student::findorFail($id)->delete();
        return redirect()->route('students.index');



        
    }
}
