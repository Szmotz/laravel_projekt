@extends('master')
@section('content')

@can('admin-only', Auth::user())

{!! Cart::content()->groupBy('id') !!}

@endcan
@stop
