<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashBoardController extends Controller
{
    public function dashboard(){
        //        $users=array();
        //        if (Session::has('loginid')){
        //            $users=User::where('id','=',Session::get('loginid'))->first();
        //        }


               $leads= DB::table('leads')
                   ->select('leads.id', 'leads.name', 'lead_type.name as name1', 'users.name as user_name', 'leads.created_at', 'lead_share.shared_with as recieve')
                   ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_by) AS shared_by'))
                   ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_by) AS shared_with'))
                   ->join('lead_type','lead_type.id','=','leads.lead_type')
                   ->join('users','leads.created_by','=','users.id')
                   ->leftJoin('lead_share','lead_share.lead_id','=','leads.id')
                   ->groupBy('leads.id')
                   ->get();
               $leads=$leads->toArray();


                return view('pages/front_end/dashboard/dashboard',[
                    'leads'=>$leads,
                ]);
            }

            public function logout(){
                if (Session::has('loginid')){
                    Session::pull('loginid');
                }
           return redirect('/login')->with('success', 'Logout Successfully!');
        }



}
