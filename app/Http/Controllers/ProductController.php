<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Brand;
use App\Models\Vendor;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Throwable;

class ProductController extends Controller
{
    public function view(){
        
        return view('product.view');
    }
    public function create(){
        $productType = ProductType::all();
        $brand = Brand::all();
        $vendor = Vendor::all();
        return view('product.create', compact('productType','brand','vendor'));
    }

    public function store(Request $request){
        $request->validate([
            'product_type_id'  =>'required',
            'brand_id' =>'required',
            'vendor_id'=>'required',
            'name'      =>'required',
            'price'     =>'required',
            'stock'     =>'required',
            'payment'   =>'required',
        ],[
            'product_type_id.required'  =>'Product Type is Required',
            'brand_id.required' =>'Brand Name is Required',
            'vendor_id.required'=>'Vendor Name is Required',
            'name.required'      =>'Name is Required',
            'price.required'     =>'Price is Required',
            'stock.required'     =>'Stock feild is Required',
            'payment.required'   =>'Payment feild is Required',
        ]);
        $product = new Product;

        $product->product_type_id   = $request->product_type_id;
        $product->brand_id  = $request->brand_id;
        $product->vendor_id = $request->vendor_id;
        $product->name       = $request->name;
        $product->price      = $request->price;
        $product->stock      = $request->stock;
        $product->payment    = $request->payment;
        $product->descript   = $request->descript;

        try{
            $product->save();
            return Redirect()->back()->with('message', 'New Product Insert Successfull!');
        }catch(Throwable $exception){
            return Redirect()->back();
        }
    }
    
}
