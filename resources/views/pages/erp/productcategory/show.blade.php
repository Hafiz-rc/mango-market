<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/productcategory/_show.blade.php" was generated by ProBot AI.
* Date: 5/4/2023 9:58:37 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show ProductCategory')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('productcategories.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$productcategory->id}}</td></tr>
		<tr><th>Name</th><td>{{$productcategory->name}}</td></tr>
		<tr><th>Section Id</th><td>{{$productcategory->section_id}}</td></tr>
		<tr><th>Created At</th><td>{{$productcategory->created_at}}</td></tr>
		<tr><th>Updated At</th><td>{{$productcategory->updated_at}}</td></tr>
		<tr><th>Inactive</th><td>{{$productcategory->inactive}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
