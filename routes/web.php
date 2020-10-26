<?php

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

Route::get('/',[ \App\Http\Controllers\EmployeeController::class, 'index'])->name('home');
Route::get('/employee_list', [\App\Http\Controllers\EmployeeController::class, 'list'])->name('employee_list');
Route::get('/employee/{employee}/edit', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::put("employee/{employee}/update", [\App\Http\Controllers\EmployeeController::class, 'update'])->name("employee.update");
