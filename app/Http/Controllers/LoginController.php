<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{



public function login_page(){

    return view('auth.login');

}

    public function loginuser(Request $request){

     $users=User::where('email','=',$request->email)->first();

        if($users){
            if ($users->email_verified_at!=null) {
                if (Hash::check($request->password, $users->password)) {
                    $request->session()->put('loginid', $users->id);
                    return redirect('/dashboard');
                } else {
                    return redirect('/login')->with('passfail','Incorrect Password');
                }
            }
            else
            {
                return redirect('/login')->with('verifyfail','User Not Verified');
            }
        }
        else{
            return redirect('/login')->with('mailfail','Incorrect Email');
        }

    }
}
