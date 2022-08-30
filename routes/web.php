<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;


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
    return view('auth.login');
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


Route::get('/forget-password', function () {
    return view('auth.forget-password');
})->middleware('guest')->name('password.request');



Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');




Route::get('/reset-password/{token}', function ($token) {
    return view('auth.recover-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');





Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('auth.login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');




//Route::post('/forget_password',[\App\Http\Controllers\RegisterController::class,'recover'] );


//////////////Recover Password/////////////


Route::get('/recover', function () {
    return view('recover-password');
});

Route::get('pass_change',function (){
   return view('pass_changed');
});


/////////DashBoard///////////////
Route::get('/dashboard',[\App\Http\Controllers\RegisterController::class,'profile'] )->middleware('authmember');


/////Logout//////
Route::get('/logout', [\App\Http\Controllers\RegisterController::class,'logout']);




