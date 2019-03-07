@extends('master')
@section('content')
<div class="videos-header card">
    <h2>Witaj w sklepie komputerowym LAPTECH!</h2>
</div>

<div class="row">

 
	    
	<div class="col-xs-12 col-md-6 col-lg-6 ">
	    <div class="card-content">

	        <h4><p>Na naszej stronie kupisz sprzęt o jakim marzysz. Posiadamy zestawy komputerowe jak i laptopy pod najbardziej wymagających klientów. Sprzęt biurowy, domowy, do pracy, do zabawy jak i najbardziej wymagający sprzęt gamingowy.</p></h4>
	            
	    </div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-6 ">
	    <div class="card-content text-center">

	        <img src="{{ asset('img/startowa.png') }}" alt="no logo">
	          
	    </div>
	</div>
</div>
{{-- Tylko jeśli nie jesteś zalogowany --}}

                
@cannot('admin-only', Auth::user())              

<div class="videos-header card text-center">
    <h4>Do korzystania z naszego sklepu wymagane jest konto:</h4>
</div>



<div class="row">
	<div class="col-xs-12 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-2 ">
	    <div class="card-content1 guzik text-center">

	        <a href="{{ url('/login') }}">Zaloguj się!</a>
	            
	    </div>
	</div>
	<div class="col-xs-12 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-2">
	    <div class="card-content1 guzik text-center">

	        <a href="{{ url('/register') }}">Zarejestruj się!</a>
	    </div>
	</div>
</div>
   
@endcannot 
 
@stop