<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;


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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[\App\Http\Controllers\RegisterController::class,'loginuser'] );

////////////////Register//////////////////////////////
///
Route::get('/', function () {
    return view('register1');
});
///
///

Route::post('/register',[\App\Http\Controllers\RegisterController::class,'registration'] );

//////////Forget Password////////////////


Route::get('/forget', function () {
    return view('forget-password');
});

Route::post('/forgetpassword',[\App\Http\Controllers\RegisterController::class,'recover'] );


//////////////Recover Password/////////////


Route::get('/recover', function () {
    return view('recover-password');
});


/////////DashBoard///////////////
Route::get('/dashboard',[\App\Http\Controllers\RegisterController::class,'profile'] )->middleware('authmember');


/////Logout//////
Route::get('/logout', [\App\Http\Controllers\RegisterController::class,'logout']);




