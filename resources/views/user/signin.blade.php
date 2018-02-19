@extends('layouts.master')

@section('title')

Signin

@endsection

@section('content')

<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		
		<h1>Signin here</h1>
		
@include('partials.error')
<form action="/signin" method="post">
	{{csrf_field()}}
	
	<div class="form-group">
		<label for="name">Email</label>
	<input type="text" id="name" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="name">password</label>
	<input type="text" id="name" name="password" class="form-control">
	</div>
	
	<button class="btn btn-success col-lg-4">Signin</button>
</form>
</div>
<div class="col-lg-4"></div>
</div>
@endsection