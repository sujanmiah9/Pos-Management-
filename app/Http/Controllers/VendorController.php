<?php

namespace App\Http\Controllers;
use App\Models\Vendor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Unique;
use Throwable;

class VendorController extends Controller
{
    public function view(){
        return view('vendor.view');
    }
    public function create(){
        return view('vendor.create');
    }
    public function store(Request $request){
        $request->validate([
            'vendor_name'=>'required',
            'phone_number'=>'required',
            'email_add'=>'required',
        ],[
            'vendor_name.required'=>'Vendor Name is Required',
            'phone_number.required'=>'Phone Number is Required',
            'email_add.required'=>'Email Address is Required',
        ]);
        $vendor = new Vendor;
        $vendor->vendor_name  = $request->vendor_name;
        $vendor->phone_number = $request->phone_number;
        $vendor->email_add    = $request->email_add;
        $vendor->descript     = $request->descript;
        try{
            $vendor->save();
            return Redirect()->back()->with('message','New Vendor create Successfull!');
        }catch(Throwable $exception){
            return Redirect()->back()->with('message','Error!!!');
        }
    }
}
