<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;

use App\Department;

use Illuminate\Support\Facades\Auth;

use App\User;

class TitleController extends Controller
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
    	$titles = Title::all();
    	return view('titles/index')->with('titles', $titles);
    }

    public function show($title)
    {
    	$titles = Title::all()->where('department_id', $title);
    	return view('titles/index')->with('titles', $titles);
    }

    public function create()
    {
    	$departments = Department::all();
    	return view('titles/create')->with('departments', $departments);
    }

    public function store(Request $request)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|unique:titles|max:50',
    	]);
    	// The company is valid, store in database...
        $title = new Title;
        $title->name = $request->name;
        $title->salary = $request->salary;
        $title->department_id = $request->department;
        $title->user_id = Auth::user()->id;
        $title->created_at = date("Y-m-d H:i:s");
        $title->save();
        $titles = Title::all();
    	return view('titles/index')->with('titles', $titles);
    }

    public function edit($title)
    {
    	$title = Title::find($title);
    	return view('titles/edit')->with('title', $title);
    }

    public function update(Request $request, $title)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|max:50',
    	]);
    	// The title is valid, store in database...
        $title = Title::find($title);
        $title->name = $request->name;
        $title->salary = $request->salary;
        $title->user_id = Auth::user()->id;
        $title->created_at = $request->created_at;
        $title->updated_at = date("Y-m-d H:i:s");
        $title->save();
        $titles = Title::all();
    	return view('titles/index')->with('titles', $titles);
    }

    public function destroy($title)
    {
    	$title = Title::find($title);
		$title->delete();
		$titles = Title::all();
    	return view('titles/index')->with('titles', $titles);
    }
}
