<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        return view('home');

    }

    public function list(){
        $employees = Employee::all();
        return view("employee_list")->with('employees', $employees);
    }


    public function edit(Employee $employee){
        return view("edit")->with('employee', $employee);
    }

    public function update(SaveEmployeeRequest $request, Employee $employee){
        $employee->update($request->all());
        return redirect()->route("employee_list");
    }


}
