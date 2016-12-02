<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

class CompanyController extends Controller
{
    public function index()
    {
    	$companies = Company::all();
    	return view('companies/list-companies')->with('companies', $companies);
    }

    public function create()
    {
    	return view('companies/add-companies');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|unique:companies|max:50',
	        'address' => 'required',
	        'contacts' => 'required',
    	]);
    	// The company is valid, store in database...
        $company = new Company;
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contacts = $request->contacts;
        $company->created_at = date("Y-m-d H:i:s");
        $company->save();
        $companies = Company::all();
    	return view('companies/list-companies')->with('companies', $companies);
    }

    public function delete($id)
    {
    	$company = Company::find($id);
		$company->delete();
		$companies = Company::all();
    	return view('companies/list-companies')->with('companies', $companies);
    }

    public function edit($id)
    {
    	$company = Company::find($id);
    	return view('companies/edit-companies')->with('company', $company);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|max:50',
	        'address' => 'required',
	        'contacts' => 'required',
    	]);
    	// The company is valid, store in database...
        $company = Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contacts = $request->contacts;
        $company->created_at = $request->created_at;
        $company->updated_at = date("Y-m-d H:i:s");
        $company->save();
        $companies = Company::all();
    	return view('companies/list-companies')->with('companies', $companies);
    }
}
