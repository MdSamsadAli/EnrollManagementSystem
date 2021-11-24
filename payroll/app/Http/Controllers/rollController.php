<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\employee;
use App\Models\Roll;
use Illuminate\Http\Request;

class RollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roll = Roll::all();
        return view('roll.index', compact('roll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = department::get();
        return view('roll.create', compact('departments'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $roll = new Roll();
        $roll -> name = request('name');
        $roll -> salary = request('salary');
        $roll -> department = request('department_name');
        $roll ->save();
        return redirect()->route('roll.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roll = Roll::get();
        $employee = employee::find($id);
        $departments = department::get();

        return view('roll.show', compact('roll', 'employee', 'departments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roll = Roll::find($id);
        // dd($roll);
        $departments = department::get();
        // dd($departments);
        return view('roll.edit', compact('roll', 'departments'));
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
        // dd(request()->all());
        $roll = new Roll();
        $roll -> name = request('name');
        $roll -> salary = request('salary');
        $roll -> department = request('department_name');
        $roll ->save();
        return redirect()->route('roll.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roll = Roll::find($id);
        if(!empty($roll))
            $roll->delete();
        return redirect()->route('roll.index');
    }
}
