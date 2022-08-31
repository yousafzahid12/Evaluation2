<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use App\Models\LeadContents;
use App\Models\LeadShare;
use App\Models\LeadType;
use App\Models\ShareAccess;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class RegisterController extends Controller
{

    public function index(){


        return UserType::find(2)->users;




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
    /////Forget Password
    public function recover(Request $request){
        $users=User::where('email','=',$request->email)->first();
        if ($users)
        {
            $request->session()->put('loginemail', $users->email);
            return redirect('pass_change');

        }else
        {
            return redirect('/forget');
        }
    }

    /////// new Password ///////////////
//    public function new_password(Request $request)
//    {
//        $users = array();
//        if (Session::has('loginemail')) {
//            $users = User::where('email', '=', Session::get('loginemail'))->first();
//            if ($users) {
//                dd($users);
//            } else {
//                return redirect('/forget');
//            }
//        }
//    }
    ////////////////

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





