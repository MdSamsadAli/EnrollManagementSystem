<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\employee;
use App\Models\Roll;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $employees = employee::all();
        // dd($employees->count());
        $rolls = Roll::all();

        $departments = department::all();
        return view('home', compact('employees','departments', 'rolls'));
    }
    
}
