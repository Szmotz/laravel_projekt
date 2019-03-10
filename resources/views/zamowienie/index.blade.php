@extends('master')
@section('content')

{{ Auth::user()->name }}
{{ Auth::user()->id }}

@stop