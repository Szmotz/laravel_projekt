<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Product;
use App\Zamowienie;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ZamowienieController extends Controller
{
   public function index()
   {
      $zamowienie = Zamowienie::latest()->get();
         return view('zamowienie.index')->with('zamowienie',$zamowienie);
   
    } 


   // public function show($id)
   // {
   //   $zamowienie = Product::latest()->get();
   //       return view('zamowienie.index')->with('zamowienie',$zamowienie);
   
   // }

   public function store($id)
   {
         $idproduct = Product::findOrFail($id);
         $iduser = Auth::id();
         // DB::insert('insert into zamowienie () values (?, ?)', [1, 'Dayle']);

      DB::table('zamowienie')->insert(
    ['product_idproduct' => $idproduct,
     'user_iduser'=> $iduser,
     'ilosc'=> '1'
 ]
);
      return view('zamowienie.index');
   }

   public function edit($id)
   {
         $zamowienie = Zamowienie::findOrFail($id);
       return view('zamowienie.showdb')->with('zamowienie',$zamowienie);
           //  $zamowienie = DB::table('zamowienie')->get();
           // return view('zamowienie.showdb')->with('zamowienie',$zamowienie);       
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
