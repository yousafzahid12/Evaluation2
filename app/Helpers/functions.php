<?php

use App\Models\Lead;

 function data(){
    $leads=DB::table('leads')
    ->select( 'leads.id','leads.name', 'lead_type.name as name1','users.name as user_name', 'leads.created_at','lead_share_access.lead_id as access')
    ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_by) AS shared_by'))->groupBy('leads.id')
    ->addSelect(DB::raw('(SELECT name FROM users WHERE users.id = lead_share.shared_with) AS shared_with'))->groupBy('leads.id')
    ->addSelect(DB::raw('(SELECT action FROM share_access WHERE lead_share_access.access_id = share_access.id) AS actions_granted'))
    ->join('lead_type','lead_type.id','=','leads.lead_type')->join('users','leads.created_by','=','users.id')
    ->leftJoin('lead_share','lead_share.lead_id','=','leads.id')
    ->leftJoin('lead_share_access','leads.id','=','lead_share_access.lead_id');
    return $leads;
 }
 function data1($del_leads){
return $del_leads;

 }
 function getLeadAccess($lead_id){
   $check= DB::table('lead_share_access')
->select('lead_id', 'share_access.action')
->join('share_access','lead_share_access.access_id','=','share_access.id')
->where('lead_id','=',$lead_id)
->get();

    return $check;
 }

 function delte($lead_id){
    $check= DB::table('lead_share_access')
 ->select( 'share_access.action')
 ->join('share_access','lead_share_access.access_id','=','share_access.id')
 ->where('lead_id','=',$lead_id)
 ->get();

     return $check;
  }
