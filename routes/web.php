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

    // Route::get('/company', [CompanyController::class, 'show']);

    // Route::get('/employeescreate', function () {
    //     return view('employeescreate');
    // });
    // Route::get('/home', [CompanyController::class, 'show']);

    // Route::resource("/home", EmployeeController::class);

    Route::post('employeescreate', [EmployeeController::class, 'createEmployee'])->name('addemployee');
    Route::get('/home/employeescreate', [EmployeeController::class, 'index'])->name('backhome');

    Route::get('/home/{id}', [EmployeeController::class, 'deleteEmployee'])->name('deleteemployee');
    // Route::get('home/employeescreate', function () {
    //     return view('employeescreate');
    // });
    
});
