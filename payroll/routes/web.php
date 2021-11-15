<?php

use App\Http\Controllers\controllers\HomeController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\employeeController;
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

// Route::get('/login', function ($id) {
//     return view('layouts.app');
// });

Route::get('/home', function(){
    return view('home');
});

// Route::get('department/index', function () {
//     return view('department.index');
// });

Route::get('/department/index', [departmentController::class, 'index'])->name('department.index');
Route::get('/department/create', [departmentController::class, 'create'])->name('department.create');
Route::post('/department/store', [departmentController::class, 'store'])->name('departments.store');

Route::get('/department/{id}/edit', [departmentController::class, 'edit'])->name('department.edit');
Route::post('/department/{id}/update', [departmentController::class, 'update'])->name('department.update');
Route::get('/department/{id}/delete', [departmentController::class, 'destroy'])->name('department.destroy');



Route::get('employee/index', [employeeController::class, 'index'])->name('employee.index');
Route::get('employee/create', [employeeController::class, 'create'])->name('employee.create');
Route::post('employee/store', [employeeController::class, 'store'])->name('employee.store');

Route::get('/employee/{id}/edit', [employeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/{id}/update', [employeeController::class, 'update'])->name('employee.update');
Route::get('/employee/{id}/delete', [employeeController::class, 'destroy'])->name('employee.destroy');




Route::get('roll/index', [rollController::class, 'index'])->name('roll.index');
Route::get('roll/create', [rollController::class, 'create'])->name('roll.create');
Route::get('roll/store', [rollController::class, 'store'])->name('roll.store');
// Route::get('roll/index', [employeeController::class, 'index'])->name('payroll.payroll');
