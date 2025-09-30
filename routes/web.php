<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TaskController;
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

Route::prefix('admin')->middleware('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // task
    Route::get('/tasks/create-task', [TaskController::class, 'index']);
    Route::post('/tasks/create-task', [TaskController::class, 'store']);
    Route::get('/tasks/edit-task/{id}', [TaskController::class, 'edit']);
    Route::put('/tasks/edit-task/{id}', [TaskController::class, 'update']);
    Route::get('/tasks/delete-task/{id}', [TaskController::class, 'destroy']);
    Route::get('/tasks/view-task', [TaskController::class, 'viewTask']);
});

Route::get('/registration', [UserRegistration::class, 'index']);
Route::post('/registration', [UserRegistration::class, 'store']);
Route::get('/login', [UserController::class, 'index'])->name('login');;
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});