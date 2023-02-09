<?php

namespace App\Http\Controllers;

use App\Models\employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    function showe(){
        return view('company', [
            'employees' => employees::all()
        ]);
    }
}
