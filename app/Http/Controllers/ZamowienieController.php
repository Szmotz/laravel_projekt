<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Product;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ZamowienieController extends Controller
{
   public function index()
   {
       $zamowienie = DB::table('zamowienie')->get();
   		return $zamowienie;
   } 
   // public function store(CreateProductRequest $request)
   // {

   //    Zamowienie::create($request->all());
   //    return redirect('zamowienie');
   // }
   // /**
   //  * Formularz edycji Produktu 
   //  * Tylko Admin!!! 
   //  */
   // public function edit($id, $iduser)
   // {
   // 	  $user = User::findOrFail($iduser);
   //    $product = Product::findOrFail($id);
   //    return view('zamowienie.edit')->with('product', $product, 'user', $user);
   // }

   // /**
   //  * Aktualizacja Produktu
   //  */
   // public function update($id, $iduser, CreateZamowienieRequest $request)
   // {
   //    $user = User::findOrFail($iduser);
   //    $user-> update($request->all());
   //    $product = Product::findOrFail($id);
   //    $product->update($request->all());
   //    return redirect('zamowienie');
   // }
}
