<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use Throwable;

class ProductTypeController extends Controller
{
    public function view(){
        return view('producttype.view');
    }
    public function create(){
        return view('producttype.create');
    }
    public function store(Request $request){
        $request->validate([
            'p_typeName'=>'required',
        ],[
            'p_typeName.required'=>'Product Type Name is Required',
        ]);
        $ProductType = new ProductType;
        $ProductType->p_typeName = $request->p_typeName;
        $ProductType->descript = $request->descript;
        
        try{
            $ProductType->save();
            return Redirect()->back()->with('message', 'success!');
        }catch(Throwable $exception){
            return Redirect()->back();
        }

    }
}
