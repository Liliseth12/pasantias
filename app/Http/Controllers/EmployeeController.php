<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees=\App\Employee::all();
        return view('index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $employee= new \App\Employee;
        $employee->firstname=$request->get('firstname');
        $employee->lastname=$request->get('lastname');
        $employee->email=$request->get('email');
        $employee->ci=$request->get('ci');
        $employee->phonenumber=$request->get('phonenumber');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $employee->entrydate=$format;
        $employee->save();
        
        return redirect('employees')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee=\App\Employee::find($id);
        return view('edit',compact('employee','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $employee=\App\Employee::find($id);
        $employee->firstname=$request->get('firstname');
        $employee->lastname=$request->get('lastname');
        $employee->email=$request->get('email');
        $employee->ci=$request->get('ci');
        $employee->phonenumber=$request->get('phonenumber');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $employee->entrydate=$format;
        $employee->save();

        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = \App\Employee::find($id);
        $employee->delete();
        return redirect('employees')->with('success','Information has been  deleted');
    }
}
