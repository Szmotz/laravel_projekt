<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
   /*
   *Pobieramy listę produktów
   */
   public function index()
   {
   		$products = Product::latest()->get();
   		return view('products.index')->with('products',$products);
   }
}
