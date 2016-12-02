<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;

use App\Department;

use App\User;

class TitleController extends Controller
{
    public function index()
    {
    	$titles = Title::all();
    	return view('titles/list-titles')->with('titles', $titles);
    }

    public function title($id)
    {
    	$titles = Title::all()->where('department_id', $id);
    	return view('titles/list-titles')->with('titles', $titles);
    }

    public function create()
    {
    	$companies = Department::all();
    	return view('titles/add-titles')->with('departments', $departments);
    }

    public function store(Request $request)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|max:50',
    	]);
    	// The company is valid, store in database...
        $title = new Title;
        $title->name = $request->name;
        $title->salary = $request->salary;
        $title->department_id = $request->department;
        $title->user_id = $request->user;
        $title->created_at = date("Y-m-d H:i:s");
        $title->save();
        $titles = Title::all();
    	return view('titles/list-titles')->with('titles', $titles);
    }

    public function edit($id)
    {
    	$title = Title::find($id);
    	return view('titles/edit-titles')->with('title', $title);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        $this->validate($request, [
	        'name' => 'required|unique:titles|max:50',
    	]);
    	// The title is valid, store in database...
        $title = Title::find($id);
        $title->name = $request->name;
        $title->salary = $request->salary;
        $title->user_id = $request->user;
        $title->created_at = $request->created_at;
        $title->updated_at = date("Y-m-d H:i:s");
        $title->save();
        $titles = Title::all();
    	return view('titles/list-titles')->with('titles', $titles);
    }

    public function delete($id)
    {
    	$title = Title::find($id);
		$title->delete();
		$titles = Title::all();
    	return view('titles/list-titles')->with('titles', $titles);
    }
}
