@extends('layouts.master')

@section('title')

shopping cart

@endsection

@section('content')
@if(Session::has('success'))
<div id="charge-error" class="alert alert-success">
  
{{Session::get('success')}}

</div>
@endif
@include('partials.session')
@foreach($product->chunk(3) as $productChunk)

 <div class="row">
  @foreach($productChunk as $product)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail  ">
      <img src="{{$product->imgpath}}" alt="..." class="img-responsive">
      <div class="caption">
        <h3>{{$product->title}}</h3>
        <p>{{$product->description}} </p>
        <p><div class="clearfix"> 
        	<div class="pull-left price">${{$product->prices}}</div>
        	<a href="/addcart/{{$product->id}}" class="btn btn-success pull-right" role="button">Add cart</a></p>
      </div>
    </div>
  </div>
</div>
  @endforeach
</div>
@endforeach
@endsection