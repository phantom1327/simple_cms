<?php

use App\Http\Controllers\Auth\LoginController;
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

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');
    Route::match(['get', 'post'], '/company/list', [CompanyController::class, 'list'])->name('company.list');
    Route::match(['get', 'post'], '/employee/list', [EmployeeController::class, 'list'])->name('employee.list');
    Route::resource('company', CompanyController::class);
    Route::resource('employee', EmployeeController::class);
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.authenticate');
