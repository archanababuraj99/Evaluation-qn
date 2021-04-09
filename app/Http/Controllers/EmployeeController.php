<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EmployeeModel;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee=EmployeeModel::all();

        return view('viewallemployee',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
     {
     $getCode=request("ecode");

         $employee=EmployeeModel::query()
         ->where('ecode','LIKE',"%{$getCode}%")
         ->get();

         return view('viewallemployee',compact('employee'));


     }
    public function store(Request $request)
    {
        $getCode=request("ecode");
        $getName=request("ename");
        $getDes=request("edes");
        $getSalary=request("esalary");
        $getCompany=request("ecompany");

        echo $getCode;
        echo "<br>";
        echo $getName;
        echo "<br>";
        echo $getDes;
        echo "<br>";
        echo $getSalary;
        echo "<br>";
        echo $getCompany;

        $employee=new EmployeeModel();
        $employee->ecode=$getCode;
        $employee->ename=$getName;
        $employee->edes=$getDes;
        $employee->esalary=$getSalary;
        $employee->ecompany=$getCompany;

        $employee->save();
        return redirect('/viewallemployee');


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
        $employee=EmployeeModel::find($id);
        return view('editemployee',compact('employee'));
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
        $employee=EmployeeModel::find($id);
        $getCode=request("ecode");
        $getName=request("ename");
        $getDes=request("edes");
        $getSalary=request("esalary");
        $getCompany=request("ecompany");


        $employee->ecode=$getCode;
        $employee->ename=$getName;
        $employee->edes=$getDes;
        $employee->esalary=$getSalary;
        $employee->ecompany=$getCompany;

        $employee->save();
        return redirect('/viewallemployee');
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
    }
}
