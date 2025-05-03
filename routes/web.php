<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/test', function () {
    return view('akshay');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

// Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);

Route::match(['get', 'post'], '/match1', function(){
    dd("Hii");
});

Route::match(['get', 'post'], '/match2', [UserController::class, 'index']);

Route::any('/any', [UserController::class, 'index']);

Route::any('/any2', function(){
    dd("hiii");
});

Route::redirect('/any', 'greeting');

Route::redirect('/test', '/', 302);

Route::permanentRedirect('/match2', 'any');
// ------------------------------------------------------------------------------------------

// route parameters

Route::get('/customer/{id}', function($id) {
    return 'user: '. $id;
});

Route::get('/posts/{post}/comments/{comment}', function($post, $comment) {
    return 'post: ' . $post . ' comment: '. $comment;
});