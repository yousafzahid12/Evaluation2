<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Session;

class DashBoardController extends Controller
{
    public function dashboard(Request $request){
        //  $leads='1';
      $specific= DB::table('users')
->select('shared_by', 'shared_with')
->addSelect(DB::raw('(SELECT email FROM users WHERE users.id = lead_share.shared_with) AS shared_with'))
->addSelect(DB::raw('(SELECT email FROM users WHERE users.id = lead_share.shared_by) AS shared_by'))
->join('lead_share','lead_share.shared_by','=','users.id')
->get();
$specific=$specific->toArray();

$search=$request["search"]??"";
if($search!=""){
    $leads=DB::table('leads')
    ->select( 'leads.id','leads.name', 'lead_type.name as name1','users.name as user_name', 'leads.created_at')
    ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_by) AS shared_by'))->groupBy('leads.id')
    ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_with) AS shared_with'))->groupBy('leads.id')
    ->addSelect(DB::raw('(SELECT action FROM share_access WHERE lead_share_access.access_id = share_access.id) AS actions_granted'))
    ->join('lead_type','lead_type.id','=','leads.lead_type')->join('users','leads.created_by','=','users.id')
    ->leftJoin('lead_share','lead_share.lead_id','=','leads.id')
    ->leftJoin('lead_share_access','leads.id','=','lead_share_access.lead_id')->where('leads.name','LIKE','%'.$search."%")->paginate(5);

}
else{
    $leads=DB::table('leads')
    ->select( 'leads.id','leads.name', 'lead_type.name as name1','users.name as user_name', 'leads.created_at')
    ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_by) AS shared_by'))->groupBy('leads.id')
    ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_with) AS shared_with'))->groupBy('leads.id')
    ->addSelect(DB::raw('(SELECT action FROM share_access WHERE lead_share_access.access_id = share_access.id) AS actions_granted'))
    ->join('lead_type','lead_type.id','=','leads.lead_type')
    ->join('users','leads.created_by','=','users.id')
    ->leftJoin('lead_share','lead_share.lead_id','=','leads.id')
    ->leftJoin('lead_share_access','leads.id','=','lead_share_access.lead_id')
    ->orderBy('leads.id')
    ->paginate(5);


}


// foreach($specific as $spe)
// {
//     if(session('email')==$spe->shared_by ||session('email')==$spe->shared_with)
//     {


        // }

        return view('pages/front_end/dashboard/dashboard')->with('lead',$leads);
}



            public function logout(){
                if (Session::has('email')){
                    Auth::logout();
                    Session::flush();
                }
           return redirect('/login')->with('success', 'Logout Successfully!');
        }




public function search($id){
    $leads=DB::table('leads')
    ->select( 'leads.id','leads.name', 'lead_type.name as name1','users.name as user_name', 'leads.created_at')
    ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_by) AS shared_by'))->groupBy('leads.id')
    ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_with) AS shared_with'))->groupBy('leads.id')
    ->addSelect(DB::raw('(SELECT action FROM share_access WHERE lead_share_access.access_id = share_access.id) AS actions_granted'))
    ->join('lead_type','lead_type.id','=','leads.lead_type')
    ->join('users','leads.created_by','=','users.id')
    ->leftJoin('lead_share','lead_share.lead_id','=','leads.id')
    ->leftJoin('lead_share_access','leads.id','=','lead_share_access.lead_id')
    ->where('leads.id','=',$id)->paginate(5);

return \view('pages.front_end.registration.search',[
    'action'=>$leads
]);
}


}
