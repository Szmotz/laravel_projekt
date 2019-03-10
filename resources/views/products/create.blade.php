@extends('master')
@section('content')
@can('admin-only', Auth::user())
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	@include('products.form_errors')

            	{!! Form::open(['url'=>'products','class'=>'form-horizontal']) !!}

            		@include('products.form')

        		{!! Form::close() !!}
           
            </div>
        </div>
    </div>
</div>
@endcan
@stop