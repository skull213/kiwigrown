<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Cart;

class CartController extends Controller
{
    public function showCart(){
    	// $items = array(
    	// 'id' => 5,
    	// 'name' => 'NICE GREEN T-SHIRT',
    	// 'price' => 15,
    	// 'quantity' => 1

    	// );

    	// Cart::insert($items);

    	//print_r(Cart::contents());
    	return view("cart");
    }


    public function addItem(Request $request){
    	$item = $request->only("id","quantity");

    	$product = \App\Models\Product::find($item["id"]);

    	$item["name"] = $product->name;
    	$item["price"] = $product->price;
    	$item["size"] = $request->get("size");


    	Cart::insert($item);

    	return redirect("cart");

    }
    
}
