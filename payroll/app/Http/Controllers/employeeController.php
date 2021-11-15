<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::get();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $emp = new employee();
        $emp-> name = $request->get('name');
        $emp-> email = $request->get('email');
        $emp-> street  = $request->get('street');
        $emp-> town = $request->get('town');
        $emp-> city  = $request->get('city');
        $emp-> country = $request->get('country');
        $emp-> role = $request->get('role');
        $emp-> position = $request->get('position');
        $emp->save();
        return redirect()->route('employee.index');
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
        $employees = employee::find($id);
        return view('employee.edit', compact('employees'));
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
        $employee = new employee();
        $employee-> name = $request->get('name');
        $employee-> email = $request->get('email');
        $employee-> street  = $request->get('street');
        $employee-> town = $request->get('town');
        $employee-> city  = $request->get('city');
        $employee-> country = $request->get('country');
        $employee-> role = $request->get('role');
        $employee-> position = $request->get('position');
        $employee->save();
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = employee::find($id);
        if(!empty($employee))
            $employee->delete();
        return redirect()->route('employee.index');
    }
}
