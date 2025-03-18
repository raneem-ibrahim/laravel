<?php

namespace App\Http\Controllers;

use App\Models\Coache;
use Illuminate\Http\Request;

class CoacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coaches = Coache::all();
        return view('coaches.index', compact('coaches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coaches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Coache::create($request->all());
        return redirect()->route('coaches.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $coach = Coache::findOrFail($id);
        return view('coaches.show', compact('coach'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $coach = Coache::findOrFail($id);
        return view('coaches.edit', compact('coach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:coaches,email,' . $id,
        ]);

        $coach = Coache::findOrFail($id);
        $coach->update($request->all());

        return redirect()->route('coaches.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coach = Coache::findOrFail($id);
        $coach->delete();

        return redirect()->route('coaches.index');
    }
}