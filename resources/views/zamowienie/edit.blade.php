@extends('master')
@section('content')

{{ Auth::user()->id }}

{{-- {!! Form::model($product,$user,['method'=>'PATCH', 'class'=>'form-horiontal', 'action'=>['ZamowienieController@update',$product->id, $user->iduser]]) !!}

<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Nazwa produktu</th>
      <th>Nazwa użykowinika</th>
      <th>ID użykowinika</th>

    </tr>
  </thead>
</table>

<table class="table table-bordered">
 
  <thead>
    <tr>
    	<td>{!! Form::text('name', null, ['class'=>'form-control']) !!}</td>
    	<td>{!! Form::text('id', null, ['class'=>'form-control']) !!}</td>
    	<td>{!! Form::text('ilosc', null, ['class'=>'form-control']) !!}</td>	
   		<td>{!! Form::text('iduser', null, ['class'=>'form-control']) !!}</td>
      
      <td><a class="btn btn-primary" href="{{ action('ZamowienieController@store', $product->id, $user->iduser )}}">
                       Złóż zamówienie
                    </a> </td>
    </tr>
   
  </tbody>
</table>
{!! Form::close() !!} --}}








@stop