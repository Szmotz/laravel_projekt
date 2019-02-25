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
   	
   		$products = Product::latest()->where('view', '1')->get();
   		return view('products.index')->with('products',$products);
   }
   /**
    * Jeden produkt
    */
   public function show($id)
   {
   	$product = Product::findOrFail($id);
   	 return view('products.show')->with('product',$product);
   }
   /**
    * Wyświetla formularz dodawania produktu
    */
   public function create()
   {
      return view('products.create');
   }
}
