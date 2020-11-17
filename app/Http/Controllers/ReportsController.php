<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function salesReport(){
        return view('report.salesreport');
    }
    public function inventoryReport(){
        return view('report.inventoryreport');
    }
    public function paymentReport(){
        return view('report.paymentreport');
    }
}
