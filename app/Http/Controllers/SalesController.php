<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function checkSale(){
        return view('sales.checksales');
    }
    public function retailDashboard(){
        return view('sales.retailDashboard');
    }
    public function history(){
        return view('sales.history');
    }
}
