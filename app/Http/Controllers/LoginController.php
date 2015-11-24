<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function showLoginForm(){
    	return view("login");

    }

    public function processLogin(\App\Http\Requests\LoginFormRequest $request,\Illuminate\Contracts\Auth\Guard $auth){
 

        $credential = $request->only("username","password");

        if($auth->attempt($credential)){

            //can login
            return redirect()->intended('index');
            

        }else{
            return redirect("login")->with("message","Try again!");
            //return \Hash::make(1);
        }
        
    }

    public function logout(\Illuminate\Contracts\Auth\Guard $auth){
        $auth->logout();
        return redirect("login");
    	
    }
}
