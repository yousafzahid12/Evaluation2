<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function registration(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
             'user_id'=>'required',
//            'email_verified_at'=>'time()',
            'password'=>'min:6|required'
        ]);
        $users= new User();
        $users->id=$request->id;
        $users->name=$request->name;
        $users->email=$request->email;
        $users->user_id=$request->user_id;
        $users->password=Hash::make($request->password);
        $res= $users->save();
        if (($res))
        {
            return back()->with('success','you have registered');
        }
        else
        {
            return back()->with('fail','Something went wrong');
        }
        return redirect('/login');

    }
    public function loginuser(Request $request){

     $users=User::where('email','=',$request->email)->first();

        if($users){
            if ($users->email_verified_at!=null) {
                if (Hash::check($request->password, $users->password)) {
                    $request->session()->put('loginid', $users->id);
                    return redirect('/dashboard');
                } else {
                    echo "Incorrect Password";
                }
            }
            else
            {
                echo "User Not Verified";
            }
        }
        else{
            echo "Incorrect Email";
        }


    }

    public function profile(){
        $users=array();
        if (Session::has('loginid')){
            $users=User::where('id','=',Session::get('loginid'))->first();
        }
        return view('dashboard',compact('users'));
    }

public function logout(){
        if (Session::has('loginid')){
            Session::pull('loginid');
        }
        return redirect('/login');
}
}
