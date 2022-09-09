<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\User;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddUserController extends Controller
{
    public function adduser(){
return \view('pages.front_end.add_new_users.new-users');
    }


    public function usercreated(Request $request){
            $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8|required_with:confirmpassword|same:confirmpassword',
            'confirmpassword'=>'required|min:8'
        ]);
        $users= new User();
        $users->id=$request->id;
        $users->name=$request->name;
        $users->email=$request->email;
        $users->user_type_id=$request->user_type_id;
        $users->password=Hash::make($request->password);
        $res= $users->save();
        $request->session()->put('email', $users->email);
        $data = [
            "subject"=>"Hii this is yousaf zahid",
            "body"=>"$users->name, mail is to inform you that you are successfully added!,<br>,$users->email,'$users->password"
            ];
          try
          {
            Mail::to($users->email)->send(new MailNotify($data));
            return \redirect('/add_user')->with('mail','User has been notified via email');
          }
          catch(Exception $e)
          {
            return redirect('/add_user')->with('mail-fail','Please try again latter');
          }

        }
}
