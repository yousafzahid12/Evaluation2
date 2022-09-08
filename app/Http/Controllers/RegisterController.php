<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\LeadContents;
use App\Models\LeadShare;
use App\Models\LeadType;
use App\Models\ShareAccess;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class RegisterController extends Controller
{

public function register_page(){
    {
        return view('pages/front_end/registration/register');
    };
}




    /////////////////////////////////
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

}





