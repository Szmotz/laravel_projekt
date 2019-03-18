<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use App\Product;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Edycja  użytkownika przez admina
     */

     public function index()
    {
      
           $users = DB::table('users')->get();
           return view('adminpages.index')->with('users',$users);    
    }
    public function indexDwa()
    {
      $products = Product::latest()->get();
      return view('adminpages.show')->with('products',$products);
    }
    public function store(CreateUserRequest $request)
   {
      Product::create($request->all());
      return redirect('adminpages');
   }

    public function edit($id)
    {
      $user = user::findOrFail($id);
      return view('adminpages.edit')->with('user', $user);
    }

    public function update($id, CreateUserRequest $request)
   {
      $user = User::findOrFail($id);
      $user->update($request->all());
      return redirect('adminpages');
   }
   public function show()
   {
      
   }
}
