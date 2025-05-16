<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeDetails;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgeValidateController;

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

Route::get('/', function () {
    return view('welcome');
});

// student crud
Route::get('/add-student', [StudentController::class, 'create']);
Route::post('/add-student', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
Route::put('/update-student/{id}', [StudentController::class, 'update']);
Route::delete('/delete-student/{id}', [StudentController::class, 'destroy']);

// employee crud
Route::get('/add-employee', [EmployeeDetails::class, 'create']);
Route::post('/add-employee', [EmployeeDetails::class, 'store']);
Route::get('/employees', [EmployeeDetails::class, 'index']);
Route::get('/edit-employee/{id}', [EmployeeDetails::class, 'edit']);
Route::put('/update-employee/{id}', [EmployeeDetails::class, 'update']);
Route::delete('/delete-employee/{id}', [EmployeeDetails::class, 'destroy']);

// crud with form validation
Route::get('/add-userdetails', [UserController::class, 'create']);
Route::post('/add-userdetails', [UserController::class, 'store']);
Route::get('/userdetails', [UserController::class, 'index']);
Route::get('/edit-userdetails/{id}', [UserController::class, 'edit']);
Route::put('/update-userdetails/{id}', [UserController::class, 'update']);
Route::delete('/delete-userdetails/{id}', [UserController::class, 'destroy']);

// crud with form validation
Route::get('/add-customer', [AgeValidateController::class, 'create']);
Route::post('/add-customer', [AgeValidateController::class, 'store']);
Route::get('/customers', [AgeValidateController::class, 'index']);
Route::get('/edit-customer/{id}', [AgeValidateController::class, 'edit']);
Route::put('/update-customer/{id}', [AgeValidateController::class, 'update']);
Route::delete('/delete-customer/{id}', [AgeValidateController::class, 'destroy']);
