<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Coache;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Student2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
             $students = student::with('coach')->get();
return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $coaches = Coache::all();  // Pass all coaches to the view
        return view('create', compact('coaches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  $student = new student();
        // $student->name = $request->name;
        // $student->age = $request->age;
        // $student->coach_id = $request->coach_id;
        // $student->save();
// $defaultCoach = Coache::first();
// Student::create([
//     'name' => $request->name,
//     'age' => $request->age,
//     'coach_id' => $defaultCoach->id ?? null,
// ]);
// return redirect()->route('mage.index');
 Student::create($request->all());
        return redirect()->route('mage.index');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
          $student = Student::findOrFail($id);
        return view('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
          $student = Student::findOrFail($id);
        $coaches = Coache::all();
        return view('edit', compact('student', 'coaches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
           $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('mage.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('mage.index');
    }
}