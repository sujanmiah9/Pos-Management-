<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\Redirect;
use Throwable;

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
    public function create(){
        $product = Product::all();
        return view('sales.createSales', compact('product'));
    }
    public function store(Request $request){
        $request->validate([
            'product_id'=>'required',
            'price'     =>'required',
        ],[
            'product_id.required'=>'Product Name is Required',
            'price.required'     =>'Price is Required',
        ]);

        $sale = new Sale;
        $sale->product_id = $request->product_id;
        $sale->price      = $request->price;
        $sale->descript   = $request->descript;

        try{
            $sale->save();
            return Redirect()->back()->with('message', 'Sale Success!');
        }catch(Throwable $exception){
            return Redirect()->back();
        }
    }
}
