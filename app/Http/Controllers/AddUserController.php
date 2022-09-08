<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        \dd($request);

    }
}
