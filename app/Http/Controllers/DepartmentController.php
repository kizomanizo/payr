<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;

use App\User;

use App\Company;

class DepartmentController extends Controller
{
	public function index()
    {
    	$departments = Department::all();
    	return view('departments/list-departments')->with('departments', $departments);
    }

    public function department($id)
    {
    	$departments = Department::all()->where('company_id', $id);
    	return view('departments/list-departments')->with('departments', $departments);
    }

    public function create()
    {
    	$companies = Company::all();
    	return view('departments/add-departments')->with('companies', $companies);
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
        $department->user_id = $request->user;
        $department->created_at = date("Y-m-d H:i:s");
        $department->save();
        $departments = Department::all();
    	return view('departments/list-departments')->with('departments', $departments);
    }

    public function edit($id)
    {
    	$department = Department::find($id);
    	return view('departments/edit-departments')->with('department', $department);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|unique:departments|max:50',
    	]);
    	// The department is valid, store in database...
        $department = Department::find($id);
        $department->name = $request->name;
        $department->user_id = $request->user;
        $department->created_at = $request->created_at;
        $department->updated_at = date("Y-m-d H:i:s");
        $department->save();
        $departments = Department::all();
    	return view('departments/list-departments')->with('departments', $departments);
    }

    public function delete($id)
    {
    	$department = Department::find($id);
		$department->delete();
		$departments = Department::all();
    	return view('departments/list-departments')->with('departments', $departments);
    }
}
