@extends('layouts.master')

@section('title')

dashboard

@endsection

@section('content')
@if(Session::has('cart'))

<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" >
		<ul class="list-group">
			@foreach((array)$products as $product)
			<li class="list-group-item">

				<span class="badge">{{$product['qty']}}</span>
				<strong>{{$product['item']['title']}}</strong>
				<span class="label label-success">{{$product['price']}}</span>
				<div class="btn-group">
					<button type="button" class="btn btn-primary btn-xs-dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">section1</a></li>
						<li><a href="#">section2</a></li>
					</ul>
				</div>
			</li>

           @endforeach
		</ul>
	</div>
	

</div>
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<strong>Total:{{$totalPrice}}</strong>
</div>
<hr>
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3"><a href="/checkout">
		<button type="button" class="btn btn-primary">checkout</button></a>
	</div>
</div>
@else
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<button type="button" class="btn btn-primary">No items in cart</button>
	</div>
</div>
@endif


@endsection