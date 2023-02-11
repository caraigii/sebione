<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function __construct(){
        $this->emp = new employees;
    }
    function index(){
        
        return view('employeescreate');
        
    }

    function index1($id){
        $comp = companies::find($id);
 
         return view('employeescreate1', [
 
             'company' => $comp
         ]);
         
     }
    function createEmployee(Request $request){

        
        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->companyid
        ];

        $this->emp->createEmployee($data);
        return redirect()->route('home')->with('success', 'Employee created successfully!');
    }

    function createEmployee1(Request $request, companies $comp){

        
        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $comp->id
        ];

        $this->emp->createEmployee1($data);
        return redirect()->route('home')->with('success', 'Employee created successfully!');
    }

    function deleteEmployee($id){
        $this->emp->deleteEmployee($id);
        return back()->with('success', 'Employee deleted!');
    }

    function updateEmployee($id){ 
        $update = $this->emp->getEmployeeID($id);
        return view('employeesedit', compact('update'));
    }

    function saveUpdatedEmployee(Request $request){
        $data = [
            'fname' => $request->updatefname,
            'lname' => $request->updatelname,
            'email' => $request->updateemail,
            'phone' => $request->updatephone,
            'company' => $request->updatecompanyid
        ];
        $this->emp->updateEmployee($data, $request->id);
        return redirect()->route('home')->with('success', 'Employee updated!');
    }

    function showEmployee($id){
        $show = $this->emp->getEmployeeID($id);
        return view('employeesshow', compact('show'));
    }


}




