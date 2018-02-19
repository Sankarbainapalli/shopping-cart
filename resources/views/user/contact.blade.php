@extends('layouts.master')

@section('title')

contact page

@endsection

@section('content')

<div class="container">
<div class="jumbotron">
  <h1 style="font-size: 30px;">contact me</h1>
  <center>
  <div class="row">
  	

<div class="col-lg-4">
	

<form action="/contact" method="post">
	{{csrf_field()}}

	
<div class="form-group">
	<input type="text" name="email" class="form-control" placeholder="Enter your email">
</div>
<div class="form-group">
	<textarea name="message" rows="5" cols="4" class="form-control" placeholder="message me"></textarea>
</div>

<button class="btn btn-primary col-lg-12" >Submit</button>



</form>
</div>


<div class="col-lg-4"></div>


  
</div>

	
</div>





@endsection