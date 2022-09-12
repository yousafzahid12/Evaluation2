<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NewUserProfileController extends Controller
{
    public function newuserprofile(Request $request,$email){

        $users=User::where('email','=',$email)->first();
        return \view('pages.front_end.add_new_users.new_users_profile',[
            'users'=>$users
        ]);
    }
    public function new_user_profile_update(Request $request){
        $request->validate([
   'name'=>'required',
   'email'=>'required',
   'dateto1'=>'required',
   'password'=>'min:8|required_with:confirmpassword|same:confirmpassword',
   'confirmpassword'=>'min:8|required'
        ]);
            User::where('email',$request->email )
          ->update([
            'password' =>\bcrypt($request->password),
            'email_verified_at'=>$request->dateto1
        ]);

         return \redirect('/login');

    }
}
