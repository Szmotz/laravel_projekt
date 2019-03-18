@extends('master')
@section('content')

@can('admin-only', Auth::user())
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Imię</th>
      <th>email</th>
      <th>rola</th>

    </tr>
  </thead>


 

  <tbody>
 @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      <td><a class="btn btn-primary" href="{{ action('AdminController@edit', $user->id) }}">
                        Edytuj Użytkownila
                    </a> </td>
    </tr>
   
 	@endforeach
  </tbody>
</table>


@endcan
@stop
