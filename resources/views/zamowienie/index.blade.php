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
   

@foreach($orders as $order)
        
      
<tbody>
          <tr>
<td>{{ $order->id }}</td>
<td>{{ $order->user_iduser }}</td>
<td>{{ $order }}</td>
</tr></tbody>
           </table>  
    

    @endforeach





@stop