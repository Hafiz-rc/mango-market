<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/productcategory/_create.blade.php" was generated by ProBot AI.
* Date: 5/4/2023 9:58:37 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create ProductCategory')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('productcategories.index')}}">Manage</a>
<form action="{{route('productcategories.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="row mb-3">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name" id="name" placeholder="Name">
		</div>
	</div>
	<div class="row mb-3">
		<label for="section_id" class="col-sm-2 col-form-label">Section</label>
		<div class="col-sm-10">
			<select class="form-control" name="section_id" id="section_id">
				@foreach($sections as $section)
				<option value="{{$section->id}}">{{$section->name}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection