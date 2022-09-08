<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function profile(Request $request){

        $res=  DB::table('users')
  ->select('*')
  ->where('email','=',Session('email'))
  ->get();
  return \view('pages.front_end.profile_update.profile',[
              'leads'=>$res
          ]);
      }


      public function updated(Request $request){
          $request->validate([
              'email'=>'required|email',
              'password'=>'required|min:8',
             'newpassword'=>'min:8|required_with:confirmnewpassword|same:confirmnewpassword',
             'confirmnewpassword'=>'min:8'
          ]);
  $users=User::where('email','=',$request->email)->first();
  if($users){
          if (Hash::check($request->password, $users->password)) {
              $users->update([
                  'password'=>\bcrypt($request->newpassword)
              ]);
                return \redirect('profile')->with('updated','Password Updated Successfully');
      }
      else{
          \dd("incorrect Old Password");
      }
  }
  else{
      dd("User doesnot exist");
  }
     }

  public function profileupdated(Request $request){
      $attributes=$request->validate([
          'file'=>'required|image'
      ]);
       $users=User::where('email','=',$request->email)->first();
      if($users){
          $attributes=\request()->file('file')->store('images');
          User::where('email',$users->email )
          ->update(['file' => $attributes]);
         }
  return \redirect('profile')->with('image','Profile Updated Successfully');

       //{
      //     $requestData = $request->all();
      //     $fileName = time().$request->file('file')->getClientOriginalName();
      //     $path = $request->file('file')->storeAs('images', $fileName, 'public');
      //     $requestData["file"] = '/storage/'.$path;


      //     }
      //     return redirect('update-password')->with('flash_message', 'Data Updated!');
      }
}
