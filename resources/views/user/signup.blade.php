@extends('layouts.master')

@section('title')

shopping cart

@endsection

@section('content')

<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		
		<h1>Signup here</h1>
		
@include('partials.error')
<form action="/signup" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label for="name">Name</label>
	<input type="text" id="name" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label for="name">Email</label>
	<input type="text" id="name" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="name">Password</label>
	<input type="text" id="name" name="password" class="form-control">
	</div>
	<button class="btn btn-success col-lg-4">Signup</button>
</form>
</div>
<div class="col-lg-4"></div>
</div>
@endsection