<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Department;

use App\User;

use App\Company;

class DepartmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
    	$departments = Department::all();
    	return view('departments/index')->with('departments', $departments);
    }

    public function show($department)
    {
    	$departments = Department::all()->where('company_id', $department);
    	return view('departments/index')->with('departments', $departments);
    }

    public function create()
    {
    	$companies = Company::all();
    	return view('departments/create')->with('companies', $companies);
    }

    public function store(Request $request)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|max:50',
    	]);
    	// The company is valid, store in database...
        $department = new Department;
        $department->name = $request->name;
        $department->company_id = $request->company;
        $department->user_id = Auth::user()->id;
        $department->created_at = date("Y-m-d H:i:s");
        $department->save();
        $company = $request->company;
        $departments = Department::all()->where('company_id', $company);
    	return view('departments/index')->with('departments', $departments);
    }

    public function edit($department)
    {
    	$department = Department::find($department);
    	return view('departments/edit')->with('department', $department);
    }

    public function update(Request $request, $department)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|unique:departments|max:50',
    	]);
    	// The department is valid, store in database...
        $department = Department::find($department);
        $department->name = $request->name;
        $department->user_id = Auth::user()->id;
        $department->created_at = $request->created_at;
        $department->updated_at = date("Y-m-d H:i:s");
        $department->save();
        $departments = Department::all();
    	return view('departments/index')->with('departments', $departments);
    }

    public function destroy($department)
    {
    	$departments = Department::destroy($department);
		$departments = Department::all();
    	return view('departments/index')->with('departments', $departments);
    }
}