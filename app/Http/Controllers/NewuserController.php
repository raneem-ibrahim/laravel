<?php

namespace App\Http\Controllers;

use App\Models\newuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class NewuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= newuser::with('phone')->get();
        return view('task1-1.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task1-1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    $request->validate([
    //     'name'=>'required',
    //     'email' => 'required|email|unique:newusers,email', 
    //      'password'=>'required',
    //     'phone'=>'required|string|max:10',
    //    ]);

      $users = newuser::create([
        'name'=>$request->name,
        'email' =>$request->email ,
        'password'=> Hash::make($request->password),
      ]);

        $users->phone()->create([
            'number'=>$request->phone,
        ]);
        return redirect()->route('task1.index')->with('success','User creted successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(newuser $newuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $users =newuser::with('phone')->findOrFail($id);
        return view('task1-1.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
         'password'=>'required',
            'phone' => 'required'
        ]);

        $users = newuser::findOrFail($id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $users->phone()->update([
            'number' => $request->phone
        ]);

        return redirect()->route('task1.index')->with('success', 'User updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $users = newuser::findOrFail($id);
        $users->delete(); 
        return redirect()->route('task1.index')->with('success', 'User deleted successfully.');
    }
}
