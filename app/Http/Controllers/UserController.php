<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
   
    function loginCheck(Request $request){
        $email = $request->input('email'); 
        $password = $request->input('password'); 
        
        $user = User::where(['email'=>$email])->first();
        
        if ($user && !Hash::check($password, $user->password)) {
            return "Username or Password Not match";
         }else{
            $request->session()->put('user',$user);
            return redirect('/');
         }
       
            
       
    }

}
