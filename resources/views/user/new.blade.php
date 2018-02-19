@extends('layouts.master')

@section('title')

shopping cart

@endsection

@section('content')

<div class="row">
  <div class="col-lg-4"></div>
  <div class="col-lg-4">
    
    <h1>Add books</h1>
    
@include('partials.error')
<form action="/p" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="name">Title</label>
  <input type="text" id="name" name="title" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">imgePath</label>
  <input type="text" id="name" name="imgpath" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Price</label>
  <input type="text" id="name" name="price" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Description</label>
<textarea class="form-control" cols="20" rows="5" id="name" name="description"></textarea>
  </div>
 
  <button class="btn btn-success col-lg-12">Post</button>
 
</form>
</div>
<div class="col-lg-4"></div>
</div>
@endsection