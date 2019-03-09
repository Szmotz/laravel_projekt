@extends('master')
@section('content')


<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Imię</th>
      <th>email</th>
    </tr>
  </thead>
</table>
 @foreach($users as $user)
<table class="table table-bordered">
 

  <thead>
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      <td><a class="btn btn-primary" href="{{ action('AdminController@edit', $user->id) }}">
                        Edytuj Użytkownila
                    </a> </td>
    </tr>
   
  </tbody>
</table>


 	@endforeach

@stop
