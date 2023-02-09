<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\employees;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(employees $emp)
    {
        return view('home', [
            'companies' => companies::all(),

            'employees' => $emp -> get()

        ]);

        
    }
}
