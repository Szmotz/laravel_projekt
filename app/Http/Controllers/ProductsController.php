<?php

namespace App\Http\Controllers;
use Request;

use App\Product;
use App\Http\Requests\CreateProductRequest;
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
   /**
    * Zapisuje nowy produkt do bazy 
    * Tylko Admin!!!!!! To ustawia sie w CreateProductRequest
    */
   public function store(CreateProductRequest $request)
   {
      Product::create($request->all());
      return redirect('products');
   }
}
