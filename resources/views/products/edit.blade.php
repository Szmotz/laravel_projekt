@extends('master')
@section('content')
@can('admin-only', Auth::user())
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	@include('products.form_errors')

            	{!! Form::model($product, ['method'=>'PATCH', 'class'=>'form-horiontal', 'action'=>['ProductsController@update',$product->id]]) !!}

            		@include('products.form')

        		{!! Form::close() !!}
           
            </div>
        </div>
    </div>
</div>
@endcan
@stop