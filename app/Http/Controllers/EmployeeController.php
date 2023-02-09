<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // //
    // function showe(){
    //     return view('company', [
    //         'employees' => employees::all()
    //     ]);
    // }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function index(companies $comp)
    // {
    //     $employee = employees::all();
    //     return view ('home', [
    //         'companies' => $comp -> get()
    //     ])->with(
    //         'employees', $employee);

    // }
    
    // public function create()
    // {
    //     return view('employeescreate');
    // }
  
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     employees::create($input);
    //     return redirect('home')->with('flash_message', 'Employee Added!');  
    // }
    
    // public function show($id)
    // {
    //     $employees = employees::find($id);
    //     return view('employeesshow')->with('employee', $employees);
    // }
    
    // public function edit($id)
    // {
    //     $employees = employees::find($id);
    //     return view('employeesedit')->with('employee', $employees);
    // }
  
    // public function update(Request $request, $id)
    // {
    //     $employees = employees::find($id);
    //     $input = $request->all();
    //     $employees->update($input);
    //     return redirect('home')->with('flash_message', 'employee Updated!');  
    // }
  
    // public function destroy($id)
    // {
    //     employees::destroy($id);
    //     return redirect('home')->with('flash_message', 'employee deleted!');  
    // }

    function __construct(){
        $this->emp = new employees;
    }

    function index(){
        return view('employeescreate');
        
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
        return back();

        // var_dump($data);
    }

//     function deleteEmployee(){
        
//     }
}




