@extends('master')
@section('content')

<div class="row">


<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nazwa</th>
      <th>Cena</th>
      <th>Zedjęcie</th>
      <th>Widoczność</th>
      <th>Edycja</th>
    </tr>
  </thead>


 

  <tbody>
 @foreach($products as $product)
    <tr>
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->img}}</td>
      <td>{{$product->view}}</td>
<td>
     <a class="btn btn-primary btn-lg" href="{{ action('ProductsController@edit', $product->id) }}">
                        Edytuj Produkt                </a></td>  
    </tr>
   
 	@endforeach
  </tbody>
</table>



</div>

@stop