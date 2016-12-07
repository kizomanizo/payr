<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Company;

class CompanyController extends Controller
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
    	$companies = Company::all();
    	return view('companies/index')->with('companies', $companies);
    }

    public function create()
    {
    	return view('companies/create');
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
    	return view('companies/index')->with('companies', $companies);
    }


    public function edit($company)
    {
        $company = Company::find($company);
        return view('companies/edit')->with('company', $company);
    }

    public function update(Request $request, $company)
    {
        // Validate the request...
        $this->validate($request, [
            'name' => 'required|max:50',
            'address' => 'required',
            'contacts' => 'required',
        ]);
        // The company is valid, store in database...
        $company = Company::find($company);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contacts = $request->contacts;
        $company->created_at = $request->created_at;
        $company->updated_at = date("Y-m-d H:i:s");
        $company->save();
        $companies = Company::all();
        return view('companies/index')->with('companies', $companies);
    }

    public function destroy($company)
    {
    	$company = Company::destroy($company);
		$companies = Company::all();
    	return view('companies/index')->with('companies', $companies);
    }
}
