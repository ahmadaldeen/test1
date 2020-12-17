<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\vendor;
use App\product;

class productContoller extends Controller
{
    // Create new product
    public function store(Request $request)
    {
        $product = new product();
        $product->name = $request->name;
        $product->vendor_id = $request->vendor_id;
        return redirect()->back();
    }
    // return all the pruduct so the user can order them
    public function getProduct()
    {
        $products =  product::all();
        return view('makeOrder')->with('products',$products);
    }
}
