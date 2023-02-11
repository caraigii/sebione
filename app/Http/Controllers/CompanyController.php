<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\employees;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function __construct(){
        $this->comp = new companies;
    }

    function index(){
        return view('companycreate');
        
    }

    function createCompany(Request $request){

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
            
        ]);
        
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        companies::create($formFields);
        return back();
    }

    function deleteCompany($id){
        $this->comp->deleteCompany($id);
        return back();
    }

    function updateCompany($id){ 
        $update = $this->comp->getCompanyID($id);
        return view('companyedit', compact('update'));
    }

    function saveUpdatedCompany(Request $request){
        $data = [
            'name' => $request->updatename,
            'email' => $request->updateemail,
            'website' => $request->updatewebsite,
            
        ];

        if($request->hasFile('updatelogo')){
            $data['logo'] = $request->file('updatelogo')->store('logos', 'public');
        }
        
        $this->comp->updateCompany($data, $request->id);
        return redirect()->route('home');
    }

    
}
