<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\Company;

use App\Department;

use App\Title;

use App\Pension;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List all
        $employees = Employee::all();
        return view('employees/index')->with('employees', $employees);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $pensions = Pension::all();
        return view('employees/create')->with('companies', $companies)->with('pensions', $pensions);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...
        $this->validate($request, [
            'fname' => 'required|max:20',
            'sname' => 'required|max:20',
            'lname' => 'required|max:20',
            'email' => 'required|unique:employees|email',
            'status' => 'required|max:20'
        ]);
        // The company is valid, store in database...
        $employee = new Employee;
        $employee->fname = $request->fname;
        $employee->sname = $request->sname;
        $employee->lname = $request->lname;
        $employee->email = $request->email;
        $employee->status = $request->status;
        $employee->title_id = $request->title_id;
        $employee->user_id = $request->user;
        $employee->created_at = date("Y-m-d H:i:s");
        $employee->save();
        $employees = Employee::all();
        return view('employees/index')->with('employees', $employees);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($employee)
    {
        $employees = Employee::all()->where('department_id', $employee);
        return view('employees/index')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($employee)
    {
        $employee = Employee::find($employee);
        return view('employees/edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employee)
    {
        // Validate the request...
        $this->validate($request, [
            'fname' => 'required|max:20',
            'sname' => 'required|max:20',
            'lname' => 'required|max:20',
            'email' => 'required|unique:employees|email',
            'status' => 'required|max:20'
        ]);
        // The employee is valid, store in database...
        $employee = Employee::find($employee);
        $employee->fname = $request->fname;
        $employee->sname = $request->sname;
        $employee->lname = $request->lname;
        $employee->email = $request->email;
        $employee->status = $request->status;
        $employee->title_id = $request->title_id;
        $employee->user_id = $request->user;
        $employee->created_at = $request->created_at;
        $employee->updated_at = date("Y-m-d H:i:s");
        $employee->save();
        $employees = Employee::all();
        return view('employees/index')->with('employees', $employees);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($employee)
    {
        // Destroy the record from the table
        $employee = Employee::find($employee);
        $employee->delete();
        $employees = Employee::all();
        return view('employees/index')->with('employees', $employees);
    }

    public function ajaxstate(Request $request)
    {
        $company_id = $request->company_id;
        $departments = Department::where('company_id','=',$company_id)->get();
        return $departments;
    }

    public function ajaxdepartment(Request $request)
    {
        $department_id = $request->department_id;
        $titles = Title::where('department_id','=',$department_id)->get();
        return $titles;
    }
}
