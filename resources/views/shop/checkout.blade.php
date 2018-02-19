@extends('layouts.master')

@section('title')

checkout

@endsection

@section('content')

<div class="row">
  <div class="col-lg-4"></div>
  <div class="col-lg-4">
    <h1>checkout</h1>
    <h2>Total Amout:</h2>
    <div id="charge-error" class="alert alert-danger  {{!Session::has('error') ? 'hidden' : ''}}">
      
      {{Session::get('error')}}
    </div>
    
   
    
<!-- @include('partials.error') -->
<form action="/checkout" method="post" id="checkout-form">
  {{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
  <input type="text" id="name" name="title" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="name">Address</label>
  <input type="text" id="name" name="Address" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="name">Card holdername</label>
  <input type="text" id="name" name="card-name" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="name">Creditcard number</label>
<input class="form-control"  id="card-number" name="description" required>
  </div>
   <div class="form-group" class="col-xs-2">
    <label for="name">Expiration Month</label>
<input class="form-control"  id="name" name="card-expiry-month" required>
  </div>
   <div class="form-group">
    <label for="name">Expiration year</label>
<input class="form-control"  id="name" name="card-expiry-year" required>
  </div>
   <div class="form-group">
    <label for="name">Cvc</label>
<input class="form-control"  id="name" name="card-cvc" required>
  </div>
 
  <button class="btn btn-success col-lg-12">Submit</button>
 
</form>
</div>
<div class="col-lg-4"></div>
</div>
@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script src="js/checkout.js" ></script>
 
@endsection
@endsection