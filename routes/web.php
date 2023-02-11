<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('company', [
//         'heading' => 'Company List',

//         // 'companies' => 'Listing'
//     ]);
// });



Route::get('/login', function () {
    return view('login');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/site/{id}', function ($id) {
//     return view('---');
// });

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');


//EMPLOYEE ROUTES
    Route::post('employeescreate', [EmployeeController::class, 'createEmployee'])->name('addemployee');
    Route::post('employeescreate1', [EmployeeController::class, 'createEmployee1'])->name('addemployee1');
    Route::get('/home/employeescreate', [EmployeeController::class, 'index'])->name('tocreateEmp');
    Route::get('/home/employeescreate1/{id}', [EmployeeController::class, 'index1'])->name('tocreateEmp1');

    Route::get('delete-employee/{id}', [EmployeeController::class, 'deleteEmployee'])->name('deleteemployee');

    Route::get('employeesedit/{id}', [EmployeeController::class, 'updateEmployee'])->name('updateemployee');
    Route::post('/save-updated-emp', [EmployeeController::class, 'saveUpdatedEmployee'])->name('saveupdate');

    Route::get('employeesshow/{id}', [EmployeeController::class, 'showEmployee'])->name('showemployee');

    
//COMPANY ROUTES
    
    Route::get('/home/companycreate', [CompanyController::class, 'index'])->name('tocreateComp');
    Route::post('companycreate', [CompanyController::class, 'createCompany'])->name('addcompany');
    
    Route::get('delete-company/{id}', [CompanyController::class, 'deleteCompany'])->name('deletecompany');

    Route::get('companyedit/{id}', [CompanyController::class, 'updateCompany'])->name('updatecompany');
    Route::post('/save-updated-comp', [CompanyController::class, 'saveUpdatedCompany'])->name('saveupdatec');
});
