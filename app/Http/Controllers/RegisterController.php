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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class RegisterController extends Controller
{

    public function index(){

//        dd( DB::table('lead_share')
//            ->select('*')
//            ->whereIn('lead_share_id',(function ($query) {
//                $query->from('share_access')
//                    ->select('lead_share_id')
//                    ->where('lead_share_id','=',1);
//            }
//                ->get());



//
//      dd( DB::table('usertypes')
//            ->select('*')
//            ->whereIN('usertypes.users_type_id',function($query) {
//                $query->from('users')
//                    ->select('user_id')
//                    ->where('user_id','=',2);
//            })
//            ->get());




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


    public function profile(){
//        $users=array();
//        if (Session::has('loginid')){
//            $users=User::where('id','=',Session::get('loginid'))->first();
//        }


       $name= DB::table('leads')
           ->select('leads.id', 'leads.name', 'lead_type.name as name1', 'users.name as user_name', 'leads.created_at', 'lead_share.shared_by as share1', 'lead_share.shared_with as recieve')
           ->join('lead_type','lead_type.id','=','leads.lead_type')
           ->join('users','leads.created_by','=','users.id')
           ->leftJoin('lead_share','lead_share.lead_id','=','leads.id')
           ->orderBy('leads.id','asc')
           ->get();
       $name=$name->toArray();

        $leads=Lead::all();
        return view('dashboard',[
            'leads'=>$name,
        ]);
    }

public function logout(){
        if (Session::has('loginid')){
            Session::pull('loginid');
        }
   return redirect('/login')->with('success', 'Logout Successfully!');
}
}





