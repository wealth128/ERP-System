<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\store;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
       
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'emp_email'  => 'required|email|unique:employee,emp_email',
            'age'        => 'required|numeric|min:18',
            'store_id'   => 'required|exists:store,store_id',
            'date_hired' => 'required|date',
        ]);

        
        Employee::create($validatedData);

        return redirect()->route('employee.index')->with('success', 'Added!');
 
    }

    public function index()
    {
        //
        $employee = Employee::all();
        return view('employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

 
    public function show(Employee $employee)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        $stores = Store::all();

        return view('employee.edit', compact('employee', 'stores'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
         $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'emp_email'  => 'required|email|unique:employee,emp_email,' . $employee->emp_id . ',emp_id'
    ]);

        $employee ->update($validatedData);

        return redirect()->route('employee.index')->with('success', 'Employee updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee deleted!');
    }


}
