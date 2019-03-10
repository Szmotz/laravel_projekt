@extends('master')
@section('content')
<?php
$i=0;
$total =0;
?>
	<div class="row well">

	<h2>Twój koszyk</h2>
{{ Session::get('msg') }}
		<table class="table table-hover">
			<thead>
				<th>Numer pozycji</th>
				<th>Nazwa produktu</th>
				<th>Cena produktu</th>
				<th>Ilość</th>
				<th>Kwota do zapłaty</th>
				<th>Usuń</th>
			</thead>
@foreach($cartProducts as $cartProduct)
			<tr>
				<td> {{ ++$i }} </td>
				<td> {{ $cartProduct->name }} </td>
				<td> {{ $cartProduct->price }} ZŁ</td>
				<td> 

					{!! Form::open(['url'=>'/update-cart','method'=>'POST']) !!}

					<input type="number" value='{{ $cartProduct->qty }}' min="1" name='qty'>
					<input type="hidden" value="{{ $cartProduct->rowId }}" name="rowId">
					<input type="submit" value="update" >

					{!! Form::close() !!}


					 </td>
				<?php
					$subtotal = $cartProduct->qty*$cartProduct->price;
				?>
				<td> {{ $subtotal }} ZŁ</td>
				<td><a href="{{ url('/delete-cart-product/'.$cartProduct->rowId) }}">Usuń</a></td>

			</tr>

			<?php
				$total = $total+$subtotal;
			?>

			
@endforeach
<tr>
	<td></td>
	<td></td>
	<td></td>
				<td> Suma łączna</td>
				<td>
					{{ $total }} ZŁ
				</td>
	<td></td>
			</tr>
		</table>		

	</div>

@stop