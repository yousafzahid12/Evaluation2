<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ResetPasswordController;


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



Route::get('/',[RegisterController::class,'register_page']);

Route::post('/register',[RegisterController::class,'registration'] );

////////////////////////////////////////////////////////////////


Route::get('/login', [LoginController::class,'login_page']) ;

Route::post('/login',[LoginController::class,'loginuser'] );

////////////////////////////////////////////////////////////////


Route::get('/forget-password',[ResetPasswordController::class,'forget_password_page'])->middleware('guest')->name('password.request');

Route::post('/forgot-password',[ResetPasswordController::class,'forget_password'])->middleware('guest')->name('password.email');


/////////////////////////////////////////////////////////////////

Route::get('/reset-password/{token}',[ResetPasswordController::class,'reset_password_page'])->middleware('guest')->name('password.reset');


Route::post('/reset-password',[ResetPasswordController::class,'reset_password'])->middleware('guest')->name('password.update');



/////////DashBoard///////////////
Route::get('/dashboard',[DashBoardController::class,'dashboard'] )->middleware('authmember');

/////Logout//////
Route::get('/logout', [\App\Http\Controllers\DashBoardController::class,'logout']);


