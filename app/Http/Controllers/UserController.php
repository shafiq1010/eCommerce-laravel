<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //login function
    function login(Request $req){
        //return $req->input();
        $user= User::where(['email'=>$req->email])->first(); 
        if(!$user || !Hash::check($req->password, $user->password)){
            //return 'Username or password not matched';
            return redirect('/login');
            
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
