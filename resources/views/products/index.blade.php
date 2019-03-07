@extends('master')
@section('content')
<div class="videos-header card">
    <h2>Nasze produkty</h2>
    @can('admin-only', Auth::user())
                
                 <a class="btn btn-primary btn-lg" href="{{ action('ProductsController@create') }}">
                        Dodaj Produkt
                    </a>    
                @endcan
</div>
<div class="row">

				
	@foreach($products as $product)
				
	    <!-- Single video -->
	    <div class="col-xs-12 col-md-6 col-lg-4 single-video">

	        <div class="card">
	        


	            <div class="embed-responsive embed-responsive-16by9">
	            	<a href="{{ url('products', $product->id) }}">
	                <img src="{{ $product->img }}">
	            </a>                                
	            </div>
	            <div class="card-content">
	                <a href="{{ url('products', $product->id) }}">
	                    <h4>{{ $product->name }}</h4>
	                </a>
	                <p> {{ $product->description }} </p>
	                <span class="upper-label">Cena: {{ $product->price}} zł.</span>
	                
	            </div>
	            
	        </div>
	    </div>

    @endforeach

</div>
@stop