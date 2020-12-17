<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\vendor;
use App\product;

class orderController extends Controller
{
    // Create new order 
    // here i used the name of the product to be name of the order .

    public function store($id)
    {
        $product = product::find($id);
        $order = new order();
        $order->name = $product->name;
        $order->product_id = $product->id;
        $order->save();
        return redirect()->back();
        }
    //return all the order for loged in vendor.d
    public function getOrderForVendor($id)
    {
       $vendor = vendor::find($id);
       $product = product::where('vendor_id',$vendor->id)->get();

       foreach ($product as $p) {
            $order = order::where('product_id',$p->id)->get();
        }
        return view('vendorHome')->with('orderForVendor',$order);
    }
}
