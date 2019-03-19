@extends('master')
@section('content')




<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>ID zamówienia</th>
      <th>Nazwa użykowinika</th>
      <th>ID użykowinika</th>

    </tr>
  </thead>
   

@foreach($zamowienie as $zam)
        
      <!-- Single video -->
<tbody>
          <tr>
<td>{{ $zam->id }}</td>
<td>{{ $zam->user_iduser }}</td>
<td>{{$zam->product_idproduct}}</td>
</tr></tbody>
           </table>  
    

    @endforeach








@stop