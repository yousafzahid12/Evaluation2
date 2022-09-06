<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function updatepassword(){
        return \view('pages.front_end.password_recovery.update-password');
    }
    public function updated(Request $request){
$users=User::where('email','=',$request->email);
if($users){
    if (Hash::check($request->password, $users->password)) {
        echo("hii");

    }


    }
}
}
