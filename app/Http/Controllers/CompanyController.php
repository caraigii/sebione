<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\employees;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    function show(employees $emp){
        // dd($emp -> get());
        
        return view('home', [
            'companies' => companies::all(),

            'employees' => $emp -> get()

        ]);
    }
}
