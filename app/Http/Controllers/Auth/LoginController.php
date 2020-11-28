<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function dashboard(){
		return view('dashboard');
	}
    public function create(){
    	return view('login.create');
    }
    public function loginProcess(Request $request){
    	$credentials = $request->only('email', 'password');
    	if(auth()->attempt($credentials)){
    		return Redirect()->route('dashboard');
    	}else{
    		session()->flash('error', 'Email or Password does not Match!');
    		return Redirect()->back();
    	}
    }
    public function logout(){
    	\auth()->logout();
    	return Redirect()->route('/');
    }
}
