<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\rollController;
use App\Models\department;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('layouts', function(){
    return View('layouts.app');
});

Route::get('show', function(){
    return View('roll.show');
});

Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

Route::get('/department/index', [DepartmentController::class, 'index'])->name('department.index');
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department/store', [DepartmentController::class, 'store'])->name('departments.store');

Route::get('/department/{id}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
Route::post('/department/{id}/update', [DepartmentController::class, 'update'])->name('department.update');
Route::get('/department/{id}/delete', [DepartmentController::class, 'destroy'])->name('department.destroy');



Route::get('employee/index', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/{id}/show', [EmployeeController::class, 'show'])->name('employee.show');


Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/{id}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/{id}/delete', [EmployeeController::class, 'destroy'])->name('employee.destroy');




Route::get('roll/index', [RollController::class, 'index'])->name('roll.index');
Route::get('roll/create', [RollController::class, 'create'])->name('roll.create');
Route::get('roll/{id}/show', [RollController::class, 'show'])->name('roll.show');
Route::post('roll/store', [RollController::class, 'store'])->name('roll.store');

Route::get('/roll/{id}/edit', [RollController::class, 'edit'])->name('roll.edit');
Route::post('/roll/{id}/update', [RollController::class, 'update'])->name('roll.update');

Route::get('/roll/{id}/delete', [RollController::class, 'destroy'])->name('roll.destroy');


Route::get('payroll/index', [PayrollController::class, 'index'])->name('payroll.index');
Route::get('payroll/create', [PayrollController::class, 'create'])->name('payroll.create');

