{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <title>Client Side Form Validation using jQuery in Laravel 8 - NiceSnippets.com</title>--}}
{{--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
{{--</head>--}}
{{--<style type="text/css">--}}
{{--    body{--}}
{{--        background: #ddd;--}}
{{--    }--}}
{{--    .container{--}}
{{--        background: #fff;--}}
{{--        margin-top:100px;--}}
{{--    }--}}
{{--    .error{--}}
{{--        color:red;--}}
{{--    }--}}
{{--</style>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <h2 class="text-center">Client Side Form Validation using jQuery in Laravel 8 - NiceSnippets.com </h2><br/>--}}
{{--    <form method="" action="" id="form">--}}
{{--        @csrf--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3"></div>--}}
{{--            <div class="form-group col-md-6">--}}
{{--                <label for="Name">Name:</label>--}}
{{--                <input type="text" class="form-control" name="name">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3"></div>--}}
{{--            <div class="form-group col-md-6">--}}
{{--                <label for="Email">Email:</label>--}}
{{--                <input type="text" class="form-control" name="email">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3"></div>--}}
{{--            <div class="form-group col-md-6">--}}
{{--                <label for="Number">Phone Number:</label>--}}
{{--                <input type="text" class="form-control" name="number">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3"></div>--}}
{{--            <div class="form-group col-md-6" style="margin-top:10px">--}}
{{--                <button type="submit" class="btn btn-success">Submit</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}
{{--<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('#form').validate({--}}
{{--            rules: {--}}
{{--                name: {--}}
{{--                    required: true--}}
{{--                },--}}
{{--                email: {--}}
{{--                    required: true,--}}
{{--                    email: true--}}
{{--                },--}}
{{--                number: {--}}
{{--                    required: true,--}}
{{--                    digits: true--}}

{{--                },--}}
{{--            },--}}
{{--            errorElement: 'span',--}}
{{--            errorPlacement: function (error, element) {--}}
{{--                error.addClass('invalid-feedback');--}}
{{--                element.closest('.form-group').append(error);--}}
{{--            },--}}
{{--            highlight: function (element, errorClass, validClass) {--}}
{{--                $(element).addClass('is-invalid');--}}
{{--            },--}}
{{--            unhighlight: function (element, errorClass, validClass) {--}}
{{--                $(element).removeClass('is-invalid');--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--</html>--}}


{{--/////////////////////////////////////////////////////////////////////////--}}
{{--<?php--}}

{{--use Illuminate\Http\Request;--}}
{{--use Illuminate\Support\Facades\Password;--}}
{{--use Illuminate\Support\Facades\Route;--}}
{{--use App\Http\Controllers\RegisterController;--}}
{{--use App\Models\User;--}}
{{--use \Illuminate\Support\Facades\Auth;--}}
{{--use App\Http\Controllers\HomeController;--}}
{{--use Illuminate\Support\Str;--}}
{{--use Illuminate\Support\Facades\Hash;--}}
{{--use Illuminate\Auth\Events\PasswordReset;--}}


{{--/*--}}
{{--|----------------------------------------------------------------------------}}
{{--| Web Routes--}}
{{--|----------------------------------------------------------------------------}}
{{--|--}}
{{--| Here is where you can register web routes for your application. These--}}
{{--| routes are loaded by the RouteServiceProvider within a group which--}}
{{--| contains the "web" middleware group. Now create something great!--}}
{{--|--}}
{{--*/--}}

{{--Route::get('/login', function () {--}}
{{--    return view('auth.login');--}}
{{--});--}}
{{--Route::post('/login',[\App\Http\Controllers\RegisterController::class,'loginuser'] );--}}

{{--////////////////Register//////////////////////////////--}}
{{--///--}}
{{--Route::get('/', function () {--}}
{{--    return view('register1');--}}
{{--});--}}
{{--///--}}
{{--///--}}

{{--Route::post('/register',[\App\Http\Controllers\RegisterController::class,'registration'] );--}}

{{--//////////Forget Password////////////////--}}


{{--Route::get('/forget-password', function () {--}}
{{--    return view('auth.forget-password');--}}
{{--})->middleware('guest')->name('password.request');--}}



{{--Route::post('/forgot-password', function (Request $request) {--}}
{{--    $request->validate(['email' => 'required|email']);--}}
{{--    $status = Password::sendResetLink(--}}
{{--        $request->only('email')--}}
{{--    );--}}

{{--    return $status === Password::RESET_LINK_SENT--}}
{{--        ? back()->with(['status' => __($status)])--}}
{{--        : back()->withErrors(['email' => __($status)]);--}}
{{--})->middleware('guest')->name('password.email');--}}




{{--Route::get('/reset-password/{token}', function ($token) {--}}
{{--    return view('auth.recover-password', ['token' => $token]);--}}
{{--})->middleware('guest')->name('password.reset');--}}





{{--Route::post('/reset-password', function (Request $request) {--}}
{{--    $request->validate([--}}
{{--        'token' => 'required',--}}
{{--        'email' => 'required|email',--}}
{{--        'password' => 'required|min:8|confirmed',--}}
{{--    ]);--}}

{{--    $status = Password::reset(--}}
{{--        $request->only('email', 'password', 'password_confirmation', 'token'),--}}
{{--        function ($user, $password) {--}}
{{--            $user->forceFill([--}}
{{--                'password' => Hash::make($password)--}}
{{--            ])->setRememberToken(Str::random(60));--}}

{{--            $user->save();--}}

{{--            event(new PasswordReset($user));--}}
{{--        }--}}
{{--    );--}}
{{--    return redirect('/login')->with('changed','you have registered');--}}



{{--})->middleware('guest')->name('password.update');--}}




{{--//Route::post('/forget_password',[\App\Http\Controllers\RegisterController::class,'recover'] );--}}


{{--//////////////Recover Password/////////////--}}


{{--Route::get('/recover', function () {--}}
{{--    return view('recover-password');--}}
{{--});--}}

{{--Route::get('pass_change',function (){--}}
{{--    return view('pass_changed');--}}
{{--});--}}


{{--/////////DashBoard///////////////--}}
{{--Route::get('/dashboard',[\App\Http\Controllers\RegisterController::class,'profile'] )->middleware('authmember');--}}


{{--/////Logout//////--}}
{{--Route::get('/logout', [\App\Http\Controllers\RegisterController::class,'logout']);--}}


{{--Route::get('/relation',[RegisterController::class,'index']);--}}
{{--////////////////////////////--}}

{{--Route::get('/jquery',function (){--}}
{{--    return view('layout');--}}
{{--});--}}
