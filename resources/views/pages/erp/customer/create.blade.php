<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/customer/_create.blade.php" was generated by ProBot AI.
* Date: 5/4/2023 9:39:09 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create Customer')
@section('style')


@endsection
@section('page')
<div class="container m-2">
<a class='btn btn-primary pl-5 pr-5' href="{{route('customers.index')}}">Manage</a>
<form action="{{route('customers.store')}}" method ="post" enctype="multipart/form-data">
@csrf
<div class="row mb-3">
	<label for="name" class="col-sm-2 col-form-label">Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="name" id="name" placeholder="Name">
	</div>
</div>
<div class="row mb-3">
	<label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
	</div>
</div>
<div class="row mb-3">
	<label for="email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="email" id="email" placeholder="Email">
	</div>
</div>
<div class="row mb-3">
	<label for="password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="password" id="password" placeholder="Password">
	</div>
</div>
<div class="row mb-3">
	<label for="country_id" class="col-sm-2 col-form-label">Country</label>
	<div class="col-sm-10">
		<select class="form-control" name="country_id" id="country_id">
			@foreach($countrys as $country)
				<option value="{{$country->id}}">{{$country->name}}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="row mb-3">
	<label for="street_address" class="col-sm-2 col-form-label">Street Address</label>
	<div class="col-sm-10">
		<textarea class="form-control" name="street_address" id="street_address" placeholder="Street Address"></textarea>
	</div>
</div>
<div class="row mb-3">
	<label for="city" class="col-sm-2 col-form-label">City</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="city" id="city" placeholder="City">
	</div>
</div>
<div class="row mb-3">
	<label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="postcode" id="postcode" placeholder="Postcode">
	</div>
</div>
<div class="row mb-3">
	<label for="apartment" class="col-sm-2 col-form-label">Apartment</label>
	<div class="col-sm-10">
		<textarea class="form-control" name="apartment" id="apartment" placeholder="Apartment"></textarea>
	</div>
</div>

<button type="submit" class="btn btn-primary pl-5 pr-5">Save</button>
</form>
</div>
@endsection
@section('script')


@endsection
