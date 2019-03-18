<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
    	// dd($request->all());
    	$productId = $request->productId;

    	$productById = 	Product::where('id',$productId)->first();
        //$userById = User::where('id',$userId);
    	Cart::add([
    		'id'=>$productId,
    		'name'=>$productById->name,
    		'price'=>$productById->price,
    		'qty'=>$request->qty

    	]);
    	return redirect('/cart-show');
    }

    public function cartShow()
    {
    	$cartProducts = Cart::Content();
        
    	return view('zamowienie.cart.cart-show',['cartProducts'=>$cartProducts]);
    }

    public function updateCart(Request $request)
    {
    	
    	Cart::update($request->rowId, $request->qty);
    	return redirect('/cart-show')->with('msg','Cart update success');
    }

    public function removeCartProduct($rowId)
    {
    	Cart::remove($rowId);

    	return redirect('/cart-show')->with('msg','Produkt pomyślnie usunięty');
    }
}
