<?php

namespace App\Http\Controllers;
use Request;

use App\User;
use App\Product;
use App\Http\Requests\CreateProductRequest;
use Illuminate\Support\Facades\Gate;



class ProductsController extends Controller
{
  /**
   * Sprawdza Czy Admin
   */
   public function admin()
    {
        if (Gate::allows('admin-only', Auth::user())){
            return view('edit');
        }
        else{
            return "Nie jesteś adminem";
        }
        if (Gate::allows('adminonly', Auth::user())){
            return view('create');
        }
        else{
            return "Nie jesteś adminem";
        }
    }
    
    /**
     * Sprawdza Czy użytkownik 
     */

    public function useronly()
    {
      if (Gate::allows('user-only', Auth::user())) {
        return 'działa';
      }
      else{
        return 'Coś poszło nie tak';
      }
    }



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
      //$product->boolean('view')->default(1);
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
   /**
    * Formularz edycji Produktu 
    * Tylko Admin!!! 
    */
   public function edit($id)
   {
      
      $product = Product::findOrFail($id);
      return view('products.edit')->with('product', $product);
   }

   /**
    * Aktualizacja Produktu
    */
   public function update($id, CreateProductRequest $request)
   {
      $product = Product::findOrFail($id);
      $product->update($request->all());
      return redirect('products');
   }
   public function __construct()
    {
        $this->middleware('auth');
    }

}
