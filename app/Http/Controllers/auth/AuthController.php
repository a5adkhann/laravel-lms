<?php

namespace App\Http\Controllers\auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    function login(Request $req){
        
        
       $user = User::where('email', $req->email)
                    ->where('password', $req->password)
                    ->first();

        if($user){
            $req->session()->put('user', $user);
            return redirect("/");
        }
        else {
            return redirect("/login");
        }
                

        


    }
}
