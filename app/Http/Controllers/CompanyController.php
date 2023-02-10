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

        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $request->logo,
        ];

        $this->comp->createCompany($data);
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
            'logo' => $request->updatelogo,
        ];
        $this->comp->updateCompany($data, $request->id);
        return redirect()->route('home');
    }

    //  public function store(Request $request){
    //         $request->validate([
    //             'file' => 'required|mimes:png,jpg,jpeg|max:2048'
    //         ]);
    
    //         try{
    //             $name = now()->timestamp.".{$request->file->getClientOriginalName()}";
    //             $path = $req->file('file')->storeAs('files', $name, 'public');
    
    //             File::create([
    //                 'file'=> "/storage/{$path}"
    //             ]);
    
    //             return redirect()->back()->with('success','File Upload Successfully!!');
    //         }catch(\Exception $e){
    //             return redirect()->back()->with('error','Something goes wrong while uploading file!');
    //         }
    //     }
}
