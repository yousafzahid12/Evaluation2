<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ResetPasswordController extends Controller
{
public function forget_password_page(){
    return view('pages/front_end/password_recovery/forget-password');
}



    public function forget_password(Request $request){
        $users=User::where('email','=',$request->email)->first();
        if ($users) {
            $request->validate(['email' => 'required|email']);
            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
        }
        else {
            return redirect('/forget-password')->with('no_user','Email Doesnot Exists');
        }
    }


    public function reset_password_page($token){
        return view('pages/front_end/password_recovery/recover-password', ['token' => $token]);
    }

    public function reset_password(Request $request){
        $users=User::where('email','=',$request->email)->first();
        if ($users) {
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
            return redirect('/login')->with('changed','Password Changed Successfully');
        }
        else{
            return redirect('reset-password/{token}')->with('invalidemail','UserName Doesnot Exist');
        }
    }
}
