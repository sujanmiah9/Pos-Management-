<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function revenue(){
        return view('revenue');
    }
    public function improvement(){
        return view('improvement');
    }
    public function accounts(){
        return view('accounts');
    }
}
