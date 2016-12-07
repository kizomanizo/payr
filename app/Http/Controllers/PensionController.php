<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pension;

use Illuminate\Support\Facades\Auth;

class PensionController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List all
        $pensions = Pension::all();
        return view('pensions/index')->with('pensions', $pensions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create a new pension fund
        //$departments = Department::all();
        return view('pensions/create');
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
            'name' => 'required|unique:pensions|max:50',
            'rate' => 'required|max:6',
        ]);
        // The company is valid, store in database...
        $pension = new pension;
        $pension->name = $request->name;
        $pension->rate = ($request->rate)/100;
        $pension->user_id = Auth::user()->id;
        $pension->created_at = date("Y-m-d H:i:s");
        $pension->save();
        $pensions = Pension::all();
        return view('pensions/index')->with('pensions', $pensions);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pension
     * @return \Illuminate\Http\Response
     */
    public function show($pension)
    {
        //
        $pensions = Pension::all()->where('pension_id', $pension);
        return view('pensions/show')->with('pensions', $pensions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pension
     * @return \Illuminate\Http\Response
     */
    public function edit($pension)
    {
        //
        $pension = Pension::find($pension);
        return view('pensions/edit')->with('pension', $pension);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pension
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pension)
    {
        // Validate the request...
        $this->validate($request, [
            'name' => 'required|max:50',
            'rate' => 'required|max:50',
        ]);
        // The pension is valid, store in database...
        $pension = Pension::find($pension);
        $pension->name = $request->name;
        $pension->rate = ($request->rate)/100;
        $pension->user_id = Auth::user()->id;
        $pension->created_at = $request->created_at;
        $pension->updated_at = date("Y-m-d H:i:s");
        $pension->save();
        $pensions = Pension::all();
        return view('pensions/index')->with('pensions', $pensions);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pension
     * @return \Illuminate\Http\Response
     */
    public function destroy($pension)
    {
        $pension = Pension::find($pension);
        $pension->delete();
        $pensions = Pension::all();
        return view('pensions/index')->with('pensions', $pensions);
    }
}
