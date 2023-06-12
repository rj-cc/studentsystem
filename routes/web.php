<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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

//php artisan route:list
//Common routes naming
//index - show all data
//show - show a single data
//create - show a form to new user
//store - store a data
//edit - show a form to update user details
//update - update a data
//destroy - delete a data

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return "Yeah!";
// });

// Route::match(['get', 'post'], '/match', function () {
//     return "Only get and post is allowed.";
// });

// Route::any('/any', function () {
//     return "Any HTTP request is allowed.";
// });

// Route::get('/user/{id}', function($id) {
//     return response($id, 200);
// });

// Route::get('/request-json', function() {
//     return response()->json(['name' => 'RJ', 'age' => '27']);
// });

// Route::get('/request-download', function() { //to auto download a file
//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array('Content-type: application/text-plain');
//     return response()->download($path, $name, $headers);
// });


//name = alias
//Route::get('/user', [UserController::class, 'index'])->name('user');

//fetch id from url to controller
//Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');

Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/process', [UserController::class, 'process']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
