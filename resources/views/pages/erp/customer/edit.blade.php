<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/customer/_edit.blade.php" was generated by ProBot AI.
* Date: 5/4/2023 9:39:09 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Edit Customer')
@section('style')


@endsection
@section('page')

<a class='btn btn-success' href="{{route('customers.index')}}">Manage</a>
<form action="{{route('customers.update',$customer)}}" method ="post" enctype="multipart/form-data">
@csrf
@method("PUT")
<div class="row mb-3">
	<label for="name" class="col-sm-2 col-form-label">Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="name" value="{{$customer->name}}" id="name" placeholder="Name">
	</div>
</div>
<div class="row mb-3">
	<label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="mobile" value="{{$customer->mobile}}" id="mobile" placeholder="Mobile">
	</div>
</div>
<div class="row mb-3">
	<label for="email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="email" value="{{$customer->email}}" id="email" placeholder="Email">
	</div>
</div>
<div class="row mb-3">
	<label for="password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="password" value="{{$customer->password}}" id="password" placeholder="Password">
	</div>
</div>
<div class="row mb-3">
	<label for="country_id" class="col-sm-2 col-form-label">Country</label>
	<div class="col-sm-10">
		<select class="form-control" name="country_id" id="country_id">
			@foreach($countrys as $country)
				@if($country->id==$customer->country_id)
					<option value="{{$country->id}}" selected>{{$country->name}}</option>
				@else
					<option value="{{$country->id}}">{{$country->name}}</option>
				@endif
			@endforeach
		</select>
	</div>
</div>
<div class="row mb-3">
	<label for="street_address" class="col-sm-2 col-form-label">Street Address</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="street_address" value="{{$customer->street_address}}" id="street_address" placeholder="Street Address">
	</div>
</div>
<div class="row mb-3">
	<label for="city" class="col-sm-2 col-form-label">City</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="city" value="{{$customer->city}}" id="city" placeholder="City">
	</div>
</div>
<div class="row mb-3">
	<label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="postcode" value="{{$customer->postcode}}" id="postcode" placeholder="Postcode">
	</div>
</div>
<div class="row mb-3">
	<label for="apartment" class="col-sm-2 col-form-label">Apartment</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="apartment" value="{{$customer->apartment}}" id="apartment" placeholder="Apartment">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save Change</button>
</form>
@endsection
@section('script')


@endsection