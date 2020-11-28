<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Throwable;

class BrandController extends Controller
{
    public function view(){
        $brands = Brand::all();
        return view('brand.view', compact('brands'));
    }
    public function show($id){
        $brnd = Brand::find($id);
        $brands = Brand::with('product')->get()->sum('stock');
        return view('brand.show',compact('brands','brnd'));
    }
    public function create(){
        return view('brand.create');
    }
    public function store(Request $request){
        $request->validate([
            'b_name'=>'required',
        ],[
            'b_name.required'=>'Brand Name is Required',
        ]);
        $brand = new Brand;
        $brand->b_name = $request->b_name;
        $brand->descript = $request->descript;
        
        try{
            $brand->save();
            return Redirect()->back()->with('message', 'success!');
        }catch(Throwable $exception){
            return Redirect()->back();
        }

    }
}
