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
//       $specific= DB::table('users')
// ->select('shared_by', 'shared_with')
// ->addSelect(DB::raw('(SELECT email FROM users WHERE users.id = lead_share.shared_with) AS shared_with'))
// ->addSelect(DB::raw('(SELECT email FROM users WHERE users.id = lead_share.shared_by) AS shared_by'))
// ->join('lead_share','lead_share.shared_by','=','users.id')
// ->get();
// $specific=$specific->toArray();

$search=$request["search"]??"";
if($search!=""){
    $leads=data()->where('leads.name','LIKE','%'.$search."%")->paginate(5);

}
else{
    $leads=data()
    ->orderBy('id')
    ->paginate(5);

// getLeadAccess($leads);


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


public function search($action){

    $leads=data()->get();



foreach($leads as $lead)
{

    $new= delte($lead->id);



    if($new==$action)
    {
dd("hii");
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $leads=data()
        ->where('leads.id','=',$id)->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
    if($new->action==$action)
    {
dd("hii");
      $shareby=DB::select('select * from users');

      $sharewith=DB::select('select * from users');
      $actions=DB::select('select * from share_access');

    }
    return view('pages.front_end.registration.search',[
        'actions'=>$shareby
    ]);

}



return redirect('dashboard');
}

//////////////////////////////////////
public function eloquentquery(){

$list=Lead::where('id','=',12)->with('leadshare','leadshareaccess','leadshare.users')->get();


dd($list->toArray());

}
public function joint(){

}


}
